<?php

namespace Softspring\CatalogBundle\DependencyInjection;

use Softspring\CatalogBundle\Model\ProductInterface;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SfsCatalogExtension extends Extension implements PrependExtensionInterface
{
    /**
     * @inheritdoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        // set config parameters
        $container->setParameter('sfs_catalog.entity_manager_name', $config['entity_manager']);
        // configure model classes
        $container->setParameter('sfs_catalog.product.class', $config['product']['class']);
        $container->setParameter('sfs_catalog.model.class', $config['model']['class'] ?? null);
    }

    public function prepend(ContainerBuilder $container)
    {
        $doctrineConfig = [];

        // add a default config to force load target_entities, will be overwritten by ResolveDoctrineTargetEntityPass
        $doctrineConfig['orm']['resolve_target_entities'][ProductInterface::class] = 'App\Entity\Product';

        // disable auto-mapping for this bundle to prevent mapping errors
        $doctrineConfig['orm']['mappings']['SfsCatalogBundle'] = [
            'is_bundle' => true,
            'mapping' => false,
        ];

        $container->prependExtensionConfig('doctrine', $doctrineConfig);
    }
}