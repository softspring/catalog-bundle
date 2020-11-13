<?php

namespace Softspring\CatalogBundle\DependencyInjection\Compiler;

use Softspring\CatalogBundle\Model\CategoryInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\PackInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CoreBundle\DependencyInjection\Compiler\AbstractResolveDoctrineTargetEntityPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ResolveDoctrineTargetEntityPass extends AbstractResolveDoctrineTargetEntityPass
{
    /**
     * {@inheritdoc}
     */
    protected function getEntityManagerName(ContainerBuilder $container): string
    {
        return $container->getParameter('sfs_catalog.entity_manager_name');
    }

    public function process(ContainerBuilder $container)
    {
        $this->setTargetEntityFromParameter('sfs_catalog.product.class', ProductInterface::class, $container, true);
        $this->setTargetEntityFromParameter('sfs_catalog.model.class', ModelInterface::class, $container, false);
        $this->setTargetEntityFromParameter('sfs_catalog.category.class', CategoryInterface::class, $container, false);
        $this->setTargetEntityFromParameter('sfs_catalog.pack.class', PackInterface::class, $container, false);
    }
}
