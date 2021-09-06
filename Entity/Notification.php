<?php

namespace Aldaflux\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Aldaflux\NotificationBundle\Model\Notification as NotificationModel;

/**
 * Class Notification
 *
 * @ORM\Entity
 * @package Aldaflux\NotificationBundle\Entity
 */
class Notification extends NotificationModel implements NotificationInterface
{

}