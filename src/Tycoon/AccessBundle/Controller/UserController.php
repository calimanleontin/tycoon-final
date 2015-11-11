<?php

namespace Tycoon\AccessBundle\Controller;

use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Stream;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Tycoon\AccessBundle\Entity\PasswordContainer;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\AccessBundle\Form\LoginType;
use Tycoon\AccessBundle\Form\PasswordContainerType;
use Tycoon\AccessBundle\Form\ProfileType;
use Tycoon\AccessBundle\Form\RegisterType;
use Tycoon\AccessBundle\Repository\UserRepository;
use Tycoon\AccessBundle\Service\DatabaseUserProvider;
use Tycoon\AccessBundle\Service\PasswordEncoder;
use Tycoon\AccessBundle\Service\UserNotifier;
use Tycoon\CatalogBundle\Entity\Product;
use Tycoon\CatalogBundle\Repository\ProductRepository;
use Tycoon\OrderBundle\Entity\Item;
use Tycoon\OrderBundle\Entity\Order;
use Tycoon\OrderBundle\Repository\OrderRepository;

/**
 * Class UserController
 * @package Tycoon\AccessBundle\Controller
 */
class UserController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function registerAction(Request $request, $slug)
    {
        $newUser = new User();

        /** @var Form $form */
        $form = $this->createForm(new RegisterType(), $newUser);

        /** @var Session $session */
        $session = $request->getSession();

        /** @var FlashBagInterface $flashBag */
        $flashBag = $session->getFlashBag();

        $form->handleRequest($request);
        if ($form->isValid()) {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var string $rawPassword */
            $rawPassword = $newUser->getPassword();

            /** @var PasswordEncoder $passwordEncoder */
            $passwordEncoder = $this->get('tycoon_access.password_encoder');

            /** @var string $encodedPassword */
            $encodedPassword = $passwordEncoder->encodePassword($rawPassword, '');

            $newUser->setPassword($encodedPassword);

            /** @var string $key */
            $key = $this->container->getParameter('secure_key');

            /** @var Client $client */
            $client = new Client(
                array(
                    'base_uri' => $this->container->getParameter('tycoon_game_server_address'),
                    'timeout' => 2,
                    'allow_redirects' => false
                )
            );

            /** @var string $uri */
            $uri = $this->container->getParameter('tycoon_game_server_uri');

            /** @var UserRepository $userRepo */
            $userRepo = $em->getRepository('TycoonAccessBundle:User');

            $nameExists = 0;
            $emailExists = 0;

            /** @var array $dbUsers */
            $dbUsers = $userRepo
                ->findOneByOrQuery(
                    $newUser->getName(),
                    $newUser->getEmail()
                )
                ->getQuery()
                ->getResult();

            if (count($dbUsers) == 1) {
                /** @var User $dbUser */
                $dbUser = $dbUsers[0];

                if ($dbUser->getName() == $newUser->getName()) {
                    $nameExists = 1;
                }

                if ($dbUser->getEmail() == $newUser->getEmail()) {
                    $emailExists = 1;
                }
            }

            if (count($dbUsers) == 2 || ($nameExists == 1 && $emailExists == 1)) {
                $flashBag->add("errorRegistration", "The username and the email are already being used.");

                return $this->render(
                    'TycoonAccessBundle:User:register.html.twig',
                    array(
                        'register_form' => $form->createView(),
                        'slug' => $slug
                    )
                );
            }

            if ($nameExists == 1) {
                $flashBag->add("errorRegistration", "The username is already being used.");

                return $this->render(
                    'TycoonAccessBundle:User:register.html.twig',
                    array(
                        'register_form' => $form->createView(),
                        'slug' => $slug
                    )
                );
            }

            if ($emailExists == 1) {
                $flashBag->add("errorRegistration", "The email is already being used.");

                return $this->render(
                    'TycoonAccessBundle:User:register.html.twig',
                    array(
                        'register_form' => $form->createView(),
                        'slug' => $slug
                    )
                );
            }

            $em->persist($newUser);
            $em->flush();

            /** @var string $jsonMessage */
            $jsonMessage = json_encode(
                array(
                    'id' => $newUser->getId(),
                    'name' => $newUser->getName(),
                    'hash' => $slug
                )
            );

            /** @var string $securityHash */
            $securityHash = hash('sha512', $key . $jsonMessage . $key);

            $receivedJson = null;

            try {
                $receivedJson = $client->post(
                    $uri,
                    $options = array(
                        'headers' => array(
                            'x-security-hash' => $securityHash
                        ),
                        'body' => $jsonMessage
                    )
                );

                /** @var Stream $jsonBody */
                $jsonBody = $receivedJson->getBody();

                /** @var mixed $response */
                $response = json_decode($jsonBody->read($jsonBody->getSize()));

                /** @var string $responseHash */
                $responseHash = $receivedJson->getHeader('x-security-hash');

                /** @var string $bodyHash */
                $bodyHash = hash('sha512', $key . $jsonBody . $key);

                if (strcmp($responseHash[0], $bodyHash) != 0) {
                    return new Response();
                }

                if ($response->status == '200') {
                    $flashBag->add("success", "Your account has been registered. Thank you.");

                    // Log in automatically

                    $token = new UsernamePasswordToken($newUser, $newUser->getPassword(), 'public');

                    $this->get("security.token_storage")
                        ->setToken($token);

                    /** @var UserNotifier $userNotifier */
                    $userNotifier = $this->get('tycoon_access.user_notifier');
                    $userNotifier->sendLogin();

                    return $this->redirectToRoute('Catalog_Product_list');
                } elseif ($response->status == '404') {
                    $flashBag->add("warning", "Try again later.");

                    $em->remove($newUser);
                    $em->flush();

                    return $this->render(
                        'TycoonAccessBundle:User:register.html.twig',
                        array(
                            'register_form' => $form->createView(),
                            'slug' => $slug
                        )
                    );
                } else {
                    $flashBag->add("warning", "Your referral does not exist. Invalid referral link .");

                    $em->remove($newUser);
                    $em->flush();

                    return $this->render(
                        'TycoonAccessBundle:User:register.html.twig',
                        array(
                            'register_form' => $form->createView(),
                            'slug' => $slug
                        )
                    );
                }
            } catch (ServerException $e) {
                $flashBag->add("warning", "There has been an error registering your account to the game server." . $e->getMessage());
            } catch (ClientException $e) {
                $flashBag->add("warning", "There has been an error registering your account to the game server." . $e->getMessage());
            }
        }

        return $this->render(
            'TycoonAccessBundle:User:register.html.twig',
            array(
                'register_form' => $form->createView(),
                'slug' => $slug
            )
        );
    }

    /**
     * @return RedirectResponse
     */
    public function gameAction()
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')->getToken();

        /** @var string $hostUrl */
        $hostUrl = $_SERVER['HTTP_HOST'];

        /** @var User $user */
        $user = $token->getUser();

        /** @var int $userId */
        $userId = $user->getId();

        /** @var string $gameSession */
        $gameSession = $user->getGameSession();

        /** @var string $baseUri */
        $baseUri = $this->container->getParameter('tycoon_game_server_address');

        /** @var string $uri */
        $uri = $this->container->getParameter('tycoon_access_game_uri') . '/' . $userId . '/' . $gameSession . '/' . $hostUrl;

        return $this->redirect($baseUri . $uri);
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function loginAction(Request $request)
    {
        $user = new User();

        /** @var Session $session */
        $session = $request->getSession();

        /** @var FlashBagInterface $flashBag */
        $flashBag = $session->getFlashBag();

        /** @var DatabaseUserProvider $dbUserProvider */
        $dbUserProvider = $this->get('tycoon_access.database_user_provider');

        /** @var PasswordEncoder $passwordEncoder */
        $passwordEncoder = $this->get('tycoon_access.password_encoder');

        /** @var Form $form */
        $form = $this->createForm(new LoginType(), $user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var string $formName */
            $formName = $user->getName();

            /** @var string $formPassword */
            $formPassword = $user->getPassword();

            try {
                /** @var User $user */
                $user = $dbUserProvider->loadUserByUsername($formName);
            } catch (UsernameNotFoundException $e) {
                $flashBag->add("warning", "Username not found");

                return $this->redirectToRoute('Catalog_Product_list');
            }

            if ($passwordEncoder->isPasswordValid($user->getPassword(), $formPassword, '')) {
                $token = new UsernamePasswordToken($user, $user->getPassword(), 'public');

                $this->get("security.token_storage")
                    ->setToken($token);

                $flashBag->add("success", "You have been logged in!");

                /** @var UserNotifier $userNotifier */
                $userNotifier = $this->get('tycoon_access.user_notifier');
                $userNotifier->sendLogin();

                if ($user->getCartItems() != 0) {
                    /** @var EntityManager $em */
                    $em = $this->getDoctrine()->getManager();

                    /** @var ProductRepository $productRepo */
                    $productRepo = $em->getRepository('TycoonCatalogBundle:Product');

                    /** @var array $items */
                    $items = explode(" ", $user->getCartItems());

                    $order = new Order();

                    $allItems = array();

                    /** @var int $number */
                    $number = count($items);

                    if ($number % 2 == 1) {
                        $number--; #number = 4
                    }

                    for ($i = 1; $i <= $number; $i += 2) {

                        /** @var Product $product */
                        $product = $productRepo->find(intval($items[$i]));
                        $quantity = intval($items[$i + 1]);

                        $item = new Item($product);
                        $item->setQuantity($quantity);
                        $item->setOrder($order);

                        $allItems[] = $item;
                    }

                    //      ADDING THE ITEMS FROM THE SESSION ORDER

                    /** @var Order $currentOrder */
                    if ($currentOrder = $session->get('cart')) {
                        /** @var array $sessionItems */
                        $sessionItems = $currentOrder->getItems();

                        if ($sessionItems != null) {
                            /** @var Item $sessionItem */
                            foreach ($sessionItems as $key => $sessionItem) {
                                /** @var int $sessionItemQuantity */
                                $sessionItemQuantity = $sessionItem->getQuantity();

                                /** @var Item $oneItem */
                                foreach ($allItems as $oneItem) {
                                    if ($oneItem->getProduct()->getId() == $sessionItem->getProduct()->getId()) {
                                        /** @var int $quantity */
                                        $quantity = $oneItem->getQuantity();
                                        $oneItem->setQuantity($quantity + $sessionItemQuantity);
                                        unset($sessionItems[$key]);

                                        break;
                                    }
                                }
                            }
                            /** @var Item $newItem */
                            foreach ($sessionItems as $sessionItem) {
                                $sessionItem->setOrder($order);

                                $allItems[] = $sessionItem;
                            }
                        }
                    }

                    $order->setItems($allItems);

                    $session->set('cart', $order);
                }
            } else {
                $flashBag->add("warning", 'Username and password combination not found.');
            }

            return $this->redirectToRoute('Catalog_Product_list');
        }

        if ($form->isSubmitted()) {
            $flashBag->add('warning', 'Username and password combination not found.');
            
            return $this->redirectToRoute('Catalog_Product_list');
        }

        return $this->render(
            'TycoonAccessBundle:User:login_form.html.twig',
            array(
                'login_form' => $form->createView()
            )
        );
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logoutAction(Request $request)
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var Session $session */
        $session = $request->getSession();

        /** @var Order $order */
        $order = $session->get('cart');

        if ($order == false) {
            $user->setCartItems(0);
        } else {
            /** @var string $items */
            $items = null;

            /** @var Item $item */
            foreach ($order->getItems() as $item) {
                $items = $items . " " . $item->getProduct()->getId() . " " . $item->getQuantity();
            }

            $user->setCartItems($items);
        }

        /**@var EntityManager $em */
        $em = $this->getDoctrine()
            ->getManager();
        $em->persist($user);
        $em->flush();

        /** @var UserNotifier $userNotifier */
        $userNotifier = $this->get('tycoon_access.user_notifier');
        $userNotifier->sendLogout();

        $this->get('security.context')
            ->setToken(null);

        /** @var Session $session */
        $session = $request->getSession();
        $session->invalidate();

        /** @var FlashBagInterface $flashBag */
        $flashBag = $session->getFlashBag();
        $flashBag->add("success", "You have been logged out!");

        return $this->redirectToRoute('Catalog_Product_list');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function profileAction(Request $request)
    {
        /** @var Session $session */
        $session = $request->getSession();

        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')
            ->getToken();

        /** @var User $user */
        $user = $token->getUser();

        if ($user instanceof User) {
            /** @var FlashBagInterface $flashBag */
            $flashBag = $session->getFlashBag();

            /** @var Form $form */
            $profileForm = $this->createForm(new ProfileType(), $user);
            $profileForm->handleRequest($request);
            if ($profileForm->isValid()) {
                /** @var EntityManager $em */
                $em = $this->getDoctrine()
                    ->getManager();
                $em->flush();

                $flashBag->add('success', 'You successfully updated your profile.');

                return $this->redirectToRoute('Access_User_account');
            }

            return $this->render(
                'TycoonAccessBundle:User:profile.html.twig',
                array(
                    'profile_form' => $profileForm->createView()
                )
            );
        }

        return $this->render('TycoonAccessBundle:User:profile.html.twig');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function securityAction(Request $request)
    {
        /** @var Session $session */
        $session = $request->getSession();

        /** @var FlashBagInterface $flashBag */
        $flashBag = $session->getFlashBag();

        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var PasswordEncoder $passwordEncoder */
        $passwordEncoder = $this->get('tycoon_access.password_encoder');

        $changePasswordModel = new PasswordContainer();

        /** @var Form $newPassForm */
        $newPassForm = $this->createForm(new PasswordContainerType(), $changePasswordModel);
        $newPassForm->handleRequest($request);

        if ($newPassForm->isValid()) {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var string $formPassword */
            $formPassword = $changePasswordModel->getOldPassword();

            if ($passwordEncoder->isPasswordValid($user->getPassword(), $formPassword, '')) {
                /** @var string $rawPassword */
                $rawPassword = $changePasswordModel->getNewPassword();

                /** @var string $encodedPassword */
                $encodedPassword = $passwordEncoder->encodePassword($rawPassword, '');

                $user->setPassword($encodedPassword);

                $em->flush();

                $flashBag->add('success', 'You successfully changed your password.');

                return $this->redirectToRoute('Access_User_account');
            }

            $flashBag->add('warning', 'The password is incorrect.');

            return $this->redirectToRoute('Access_User_security');
        }

        return $this->render(
            'TycoonAccessBundle:User:security.html.twig',
            array(
                'new_pass_form' => $newPassForm->createView()
            )
        );
    }

    /**
     * @return Response
     */
    public function accountAction()
    {
        return $this->render('TycoonAccessBundle:User:account.html.twig');
    }

    /**
     * @return Response
     */
    public function historyAction()
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')->getToken();

        /** @var User $user */
        $user = $token->getUser();

        if ($user instanceof User) {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var OrderRepository $orderRepo */
            $orderRepo = $em->getRepository('TycoonOrderBundle:Order');

            /** @var array $orders */
            $orders = $orderRepo
                ->getOrdersQuery($user->getId())
                ->getQuery()
                ->getResult();

            return $this->render(
                'TycoonAccessBundle:User:history.html.twig',
                array(
                    'orders' => $orders
                )
            );
        }

        return $this->render('TycoonAccessBundle:User:history.html.twig');
    }

    /**
     * @return Response
     */
    public function loginpageAction()
    {
        return $this->render('TycoonAccessBundle:User:login.html.twig');
    }
}
