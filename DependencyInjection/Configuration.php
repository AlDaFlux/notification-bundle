<?php
/**
 * Project: notification-bundle
 * User: Leandro Luccerini <leandro.luccerini@gmail.com>
 * Date: 08/11/18
 * Time: 9.29
 */

namespace Aldaflux\NotificationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Aldaflux\NotificationBundle\Entity\NotificationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('aldaflux_notification');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('aldaflux_notification');
        }

        $rootNode->children()
            ->scalarNode('notification_class')
                ->cannotBeEmpty()
                ->defaultValue(NotificationInterface::DEFAULT_NOTIFICATION_ENTITY_CLASS)
            ->end()
        ->end();

        return $treeBuilder;
    }
}