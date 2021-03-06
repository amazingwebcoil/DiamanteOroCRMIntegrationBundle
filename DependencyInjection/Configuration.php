<?php

namespace Diamante\OroCRMIntegrationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('diamante_oro_crm_integration');

        SettingsBuilder::append(
            $rootNode,
            [
                'create_contact' => [
                    'value' => false,
                    'type'  => 'bool',
                ],
                'default_owner'  => [
                    'value' => null,
                    'type'  => 'string',
                ],
            ]
        );

        return $treeBuilder;
    }
}
