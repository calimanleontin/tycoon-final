<?php

namespace Tycoon\SubscriptionBundle\Command;

use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Tycoon\SubscriptionBundle\Entity\Notification;
use Tycoon\SubscriptionBundle\Entity\Subscription;
use Tycoon\SubscriptionBundle\Repository\SubscriptionRepository;

class NotificationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('notification')
            ->addOption(
                'secondsBetweenReload',
                null,
                InputOption::VALUE_REQUIRED,
                'What is the interval between reloading ?',
                5
            );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var int $seconds */
        $seconds = $input->getOption('secondsBetweenReload');

        /** @var \DateTime $thisTime */
        $thisTime = new \DateTime();

        $output->write($thisTime->format('d-m-Y H:i:s').': Started notification command with a delay of '.$seconds);
        $output->writeln(' seconds between loops.');

        /** @var EntityManager $em */
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

        /** @var Client $client */
        $client = new Client(
            array(
                'base_uri' => $this->getContainer()->getParameter('tycoon_game_server_address'),
                'timeout' => 2,
                'allow_redirects' => false
            )
        );

        /** @var string $uri */
        $uri = $this->getContainer()->getParameter('tycoon_game_send_notification');

        $output->writeln($thisTime->format('d-m-Y H:i:s').': Started listening.');

        while (true) {
            /** @var \DateTime $currentTime */
            $currentTime = new \DateTime();

            /** @var int $currentTimeTimestamp */
            $currentTimeTimestamp = $currentTime->getTimestamp();

            /** @var SubscriptionRepository $subscriptionRepo */
            $subscriptionRepo = $em->getRepository('TycoonSubscriptionBundle:Subscription');

            /** @var array $subscriptions */
            $subscriptions = $subscriptionRepo
                ->findNecessarySubscriptions($currentTimeTimestamp, $seconds);

            $message = array();

            /** @var int $numberOfNotifications */
            $numberOfNotifications = 0;

            /** @var Subscription $subscription */
            foreach ($subscriptions as $subscription) {

                /** @var \DateTime $startTime */
                $startTime = $subscription->getStartDate();

                /** @var \DateTime $endTime */
                $endTime = $subscription->getEndDate();

                /** @var \DateTime $thisTime */
                $thisTime = new \DateTime();

                // Started subscriptions notifications
                if ($thisTime >= $startTime && $thisTime <= $endTime) {
                    if ($subscription->getNotified() == 'not-notified') {
                        $numberOfNotifications++;
                        $message['notification'.$numberOfNotifications] = $this->createNotificationArray(
                            $subscription,
                            $endTime,
                            'started'
                        );

                        $subscription->setNotified('started');
                    }
                } elseif ($thisTime >= $endTime) { // Expired subscriptions notifications
                    if ($subscription->getNotified() == 'not-notified' || $subscription->getNotified() == 'started') {
                        $numberOfNotifications++;
                        $message['notification'.$numberOfNotifications] = $this->createNotificationArray(
                            $subscription,
                            $endTime,
                            'expired'
                        );

                        $subscription->setNotified('ended');
                    }
                }
            }

            if ($message != null) {
                /** @var string $jsonMessage */
                $jsonMessage = $this->outputJson($message, $output);

                // Not yet working
                // $client->post($uri, $options = ['body' => $jsonMessage]);

                $em->flush();
            }

            sleep($seconds);
        }
    }

    /**
     * @param Subscription $subscription
     * @param \DateTime $endTime
     * @param $status
     * @return array
     */
    private function createNotificationArray(Subscription $subscription, \DateTime $endTime, $status)
    {
        $notification = new Notification();
        $notification->setEndDate($endTime->format('d-m-Y H:i:s'));
        $notification->setSubscriptionName($subscription->getName());
        $notification->setUserId($subscription->getUser()->getId());
        $notification->setStatus($status);

        return $notification->getVars();
    }

    /**
     * @param array $message
     * @param OutputInterface $output
     * @return string
     */
    private function outputJson($message, $output)
    {
        /** @var \DateTime $thisTime */
        $thisTime = new \DateTime();

        /** @var int $numberOfNotifications */
        $numberOfNotifications = 0;

        foreach ($message as $msg) {
            $numberOfNotifications++;
            $output->write($thisTime->format('d-m-Y H:i:s').': Sending \'');
            $output->write($msg['status'].'\' notification for subscription ');
            $output->writeln('\''.$msg['subscriptionName'].'\' bought by user with id: '.$msg['userId'].'.');
        }

        $finalMessage = array(
            "notifications" => $message
        );

        /** @var string $jsonMessage */
        $jsonMessage = json_encode($finalMessage);

        return $jsonMessage;
    }
}
