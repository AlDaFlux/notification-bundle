<?php

namespace Aldaflux\NotificationBundle\Event;

use Aldaflux\NotificationBundle\Entity\NotificationInterface;
use Aldaflux\NotificationBundle\NotifiableInterface;
#use Symfony\Component\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\Event;



class NotificationEvent extends Event
{
    private $notification;
    private $notifiable;

    /**
     * NotificationEvent constructor.
     *
     * @param NotificationInterface    $notification
     * @param NotifiableInterface|null $notifiable
     */
    public function __construct(NotificationInterface $notification, NotifiableInterface $notifiable = null)
    {
        $this->notification = $notification;
        $this->notifiable = $notifiable;
    }

    /**
     * @return NotificationInterface
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @return NotifiableInterface
     */
    public function getNotifiable()
    {
        return $this->notifiable;
    }
}
