<?php

namespace Vlabs\AmazonMWSBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

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
        $rootNode = $treeBuilder->root('vlabs_amazon_mws');

        $rootNode
            ->children()
                ->scalarNode('access_key')->isRequired()->end()
                ->scalarNode('secret_key')->isRequired()->end()
                ->scalarNode('application_name')->isRequired()->end()
                ->scalarNode('application_version')->isRequired()->end()
                ->arrayNode('config')
                    ->useAttributeAsKey('name')
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
