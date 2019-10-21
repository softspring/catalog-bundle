<?php

namespace Softspring\CatalogBundle\DependencyInjection\Compiler;

use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CoreBundle\DependencyInjection\Compiler\AbstractResolveDoctrineTargetEntityPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ResolveDoctrineTargetEntityPass extends AbstractResolveDoctrineTargetEntityPass
{
    /**
     * @inheritDoc
     */
    protected function getEntityManagerName(ContainerBuilder $container): string
    {
        return $container->getParameter('sfs_catalog.entity_manager_name');
    }

    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $this->setTargetEntityFromParameter('sfs_catalog.product.class', ProductInterface::class, $container, true);
        $this->setTargetEntityFromParameter('sfs_catalog.model.class', ModelInterface::class, $container, false);
    }
}