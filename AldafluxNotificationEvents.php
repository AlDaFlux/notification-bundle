<?php

namespace Aldaflux\NotificationBundle;

final class AldafluxNotificationEvents
{
    /**
     * Occurs when a Notification is created.
     *
     * @Event("Aldaflux\NotificationBundle\Event\NotificationEvent")
     */
    const CREATED = 'aldaflux.notification.created';

    /**
     * Occurs when a Notification is assigned to a NotifiableEntity.
     *
     * @Event("Aldaflux\NotificationBundle\Event\NotificationEvent")
     */
    const ASSIGNED = 'aldaflux.notification.assigned';

    /**
     * Occurs when a Notification is marked as seen.
     *
     * @Event("Aldaflux\NotificationBundle\Event\NotificationEvent")
     */
    const SEEN = 'aldaflux.notification.seen';

    /**
     * Occurs when a Notification is marked as unseen.
     *
     * @Event("Aldaflux\NotificationBundle\Event\NotificationEvent")
     */
    const UNSEEN = 'aldaflux.notification.unseen';

    /**
     * Occurs when a Notification is modified.
     *
     * @Event("Aldaflux\NotificationBundle\Event\NotificationEvent")
     */
    const MODIFIED = 'aldaflux.notification.modified';

    /**
     * Occurs when a Notification is removed.
     *
     * @Event("Aldaflux\NotificationBundle\Event\NotificationEvent")
     */
    const REMOVED = 'aldaflux.notification.removed';

    /**
     * Occurs when a Notification is deleted
     *
     * @Event("Aldaflux\NotificationBundle\Event\NotificationEvent")
     */
    const DELETED = 'aldaflux.notification.delete';
}
