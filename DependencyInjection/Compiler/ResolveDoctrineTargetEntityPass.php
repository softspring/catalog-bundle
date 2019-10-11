<?php

namespace Softspring\CatalogBundle\DependencyInjection\Compiler;

use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\LogicException;

class ResolveDoctrineTargetEntityPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        // configure catalog entity
        $productClass = $container->getParameter('sfs_catalog.product.class');
        if (!class_implements($productClass, ProductInterface::class)) {
            throw new LogicException(sprintf('%s class must implements %s interface', $productClass, ProductInterface::class));
        }
        $this->setTargetEntity($container, ProductInterface::class, $productClass);

        // configure model entity
        if ($modelClass = $container->getParameter('sfs_catalog.model.class')) {
            if (!class_implements($modelClass, ModelInterface::class)) {
                throw new LogicException(sprintf('%s class must implements %s interface', $modelClass, ModelInterface::class));
            }

            $this->setTargetEntity($container, ModelInterface::class, $modelClass);
        }
    }

    private function setTargetEntity(ContainerBuilder $container, string $interface, string $class)
    {
        $resolveTargetEntityListener = $container->findDefinition('doctrine.orm.listeners.resolve_target_entity');

        if (!$resolveTargetEntityListener->hasTag('doctrine.event_subscriber')) {
            $resolveTargetEntityListener->addTag('doctrine.event_subscriber');
        }

        $resolveTargetEntityListener->addMethodCall('addResolveTargetEntity', [$interface, $class, [$container->getParameter('sfs_catalog.entity_manager_name')]]);
    }
}