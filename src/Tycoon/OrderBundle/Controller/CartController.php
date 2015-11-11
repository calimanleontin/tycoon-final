<?php

namespace Tycoon\OrderBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\CatalogBundle\Entity\Product;
use Tycoon\OrderBundle\Entity\Item;
use Tycoon\OrderBundle\Entity\Order;
use Tycoon\OrderBundle\Service\OrderService;

/**
 * Class CartController
 * @package Tycoon\OrderBundle\Controller
 */
class CartController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request)
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')->getToken();

        /** @var User $user */
        $user = $token->getUser();

        if ($user instanceof User == false or $user->getAdminFlag() == false) {
            /** @var Session $session */
            $session = $request->getSession();

            /** @var Order $unfinishedOrder */
            $unfinishedOrder = $session->get('cart');

            return $this->render(
                'TycoonOrderBundle:Cart:list.html.twig',
                array(
                    'cart' => $unfinishedOrder
                )
            );
        } else {
            /** @var Session $session */
            $session = $request->getSession();

            /** @var FlashBagInterface $flashBag */
            $flashBag = $session->getFlashBag();

            $flashBag->add('warning', '403 - Forbidden: Access is denied.');

            return $this->redirectToRoute('Catalog_Product_list');
        }
    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function moreAction(Request $request, $id)
    {
        /** @var Session $session */
        $session = $request->getSession();

        /** @var OrderService $orderService */
        $orderService = $this->get('tycoon_order.order_service');

        $orderService->increaseItemQuantity($session, $id);

        return $this->redirectToRoute('Order_Cart_list');
    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function lessAction(Request $request, $id)
    {
        /** @var Session $session */
        $session = $request->getSession();

        /** @var Order $shoppingCart */
        $shoppingCart = $session->get('cart');

        /**
         * @var Item $item
         */
        foreach ($shoppingCart->getItems() as $item) {
            /** @var Product $product */
            $product = $item->getProduct();

            if ($product->getId() == $id) {
                if ($item->getQuantity() == 1) {
                    $flashBag = $session->getFlashBag();
                    $flashBag->add("warning", "You can't have a product with quantity 0.");

                    return $this->redirectToRoute('Order_Cart_list');
                }

                $item->decreaseQuantity();

                break;
            }
        }

        $session->set('cart', $shoppingCart);

        return $this->redirectToRoute('Order_Cart_list');
    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function addAction(Request $request, $id)
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var Session $session */
        $session = $request->getSession();

        /** @var FlashBag $flashBag */
        $flashBag = $session->getFlashBag();

        if ($user instanceof User == false or !$user->getAdminFlag()) {
            /** @var OrderService $orderService */
            $orderService = $this->get('tycoon_order.order_service');

            /** @var bool $isAdded */
            $isAdded = $orderService->increaseItemQuantity($session, $id);

            if ($isAdded) {
                $flashBag->add('success', 'You successfully added the product in shopping cart.');
            } else {
                $flashBag->add(
                    'warning',
                    'The product you tried to add in shopping cart is not available at this moment.'
                );
            }

            return $this->redirectToRoute('Catalog_Product_list');
        } else {
            $flashBag->add('warning', 'Error !');

            return $this->redirectToRoute('Catalog_Product_list');
        }
    }

    /**
     * @param int $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, $id)
    {
        /** @var Session $session */
        $session = $request->getSession();

        /** @var Order $unfinishedOrder */
        $unfinishedOrder = $session->get('cart');

        /** @var Item $item */
        foreach ($unfinishedOrder->getItems() as $item) {
            /** @var Product $product */
            $product = $item->getProduct();

            if ($product->getId() == $id) {
                $unfinishedOrder->removeItem($item);

                break;
            }
        }

        $session->set('cart', $unfinishedOrder);

        return $this->redirectToRoute('Order_Cart_list');
    }
}
