<?php

namespace Tycoon\AccessBundle\Service;

use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Tycoon\AccessBundle\Entity\User;

class UserNotifier implements ContainerAwareInterface
{
    /** @var ContainerInterface $container */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function sendLogin()
    {
        /** @var EntityManager $em */
        $em = $this->container->get('doctrine')->getManager();

        /** @var UsernamePasswordToken $token */
        $token = $this->container
            ->get('security.context')
            ->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var Session $session */
        $session = $this->container->get('session');

        /** @var FlashBag $flashBag */
        $flashBag = $session->getFlashBag();

        /** @var Client $client */
        $client = new Client(
            array(
                'base_uri' => $this->container->getParameter('tycoon_game_server_address'),
                'timeout' => 2,
                'allow_redirects' => false
            )
        );

        /** @var string $uri */
        $uri = $this->container->getParameter('tycoon_session_start_uri');

        /** @var string $jsonMessage */
        $jsonMessage = json_encode(
            array(
                'manager_id' => $user->getId()
            )
        );

        try {
            /** @var ResponseInterface $response */
            $receivedJson = $client->post($uri, $options = array('body' => $jsonMessage));

            /** @var StreamInterface $jsonBody */
            $jsonBody = $receivedJson->getBody();

            /** @var mixed $response */
            $response = json_decode($jsonBody->read($jsonBody->getSize()));

            $user->setGameSession($response->sessionId);

            $em->flush();
        } catch (ServerException $e) {
            $flashBag->add("warning", "There has been an error logging in your account to the game server.");
        } catch (ClientException $e) {
            $flashBag->add("warning", "There has been an error logging in your account to the game server.");
        } catch (\Exception $e) {
            $flashBag->add("warning", "There has been an error synchronizing your login session with the game server.");
        }
    }

    public function sendLogout()
    {
        /** @var EntityManager $em */
        $em = $this->container
            ->get('doctrine')
            ->getManager();

        /** @var UsernamePasswordToken $token */
        $token = $this->container
            ->get('security.context')
            ->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var Client $client */
        $client = new Client(
            array(
                'base_uri' => $this->container->getParameter('tycoon_game_server_address'),
                'timeout' => 2,
                'allow_redirects' => false
            )
        );

        /** @var string $uri */
        $uri = $this->container->getParameter('tycoon_session_end_uri');

        /** @var string $jsonMessage */
        $jsonMessage = json_encode(
            array(
                'manager_id' => $user->getId(),
                'game_session' => $user->getGameSession()
            )
        );

        /** @var ResponseInterface $response */
        $receivedJson = $client->post($uri, $options = array('body' => $jsonMessage));

        /** @var StreamInterface $jsonBody */
        $jsonBody = $receivedJson->getBody();

        /** @var mixed $response */
        $response = json_decode($jsonBody->read($jsonBody->getSize()));

        $user->setGameSession('');

        $em->flush();
    }
}
