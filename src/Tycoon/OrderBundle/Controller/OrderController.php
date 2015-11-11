<?php

namespace Tycoon\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\OrderBundle\Entity\Order;
use Tycoon\OrderBundle\Service\DeliveryService;
use Tycoon\OrderBundle\Service\OrderService;
use Tycoon\OrderBundle\Service\PaymentService;
use Tycoon\SubscriptionBundle\Service\SubscriptionService;

/**
 * Class OrderController
 * @package Tycoon\OrderBundle\Controller
 */
class OrderController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function finalizeAction(Request $request)
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->get('security.token_storage')->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var Session $session */
        $session = $request->getSession();

        /** @var FlashBagInterface $flashBag */
        $flashBag = $session->getFlashBag();

        if ($user instanceof User and $user->getAdminFlag() == false) {
            /** @var Order $order */
            $order = $session->get('cart');

            /** @var OrderService $orderService */
            $orderService = $this->get('tycoon_order.order_service');

            if (!$orderService->initializeOrder($order)) {
                return $this->redirectToRoute('Order_Cart_list');
            }

            /** @var PaymentService $paymentService */
            $paymentService = $this->get('tycoon_order.payment_service');

            if (!$paymentService->hasGold($order)) {
                return $this->redirectToRoute('Order_Cart_list');
            }

            /** @var DeliveryService $deliveryService */
            $deliveryService = $this->get('tycoon_order.delivery_service');

            if (!$deliveryService->deliverOrder($order)) {
                return $this->redirectToRoute('Order_Cart_list');
            }

            /** @var SubscriptionService $subscriptionService */
            $subscriptionService = $this->get('tycoon_subscription.subscription_service');

            $subscriptionService->addSubscription($order);

            return $this->redirectToRoute('Catalog_Product_list');
        } else {
            $flashBag->add('warning', '403 - Forbidden: Access is denied.');

            return $this->redirectToRoute('Catalog_Product_list');
        }
    }
}
