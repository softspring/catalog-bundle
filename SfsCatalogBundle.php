<?php

namespace Softspring\CatalogBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Softspring\CatalogBundle\DependencyInjection\Compiler\AliasDoctrineEntityManagerPass;
use Softspring\CatalogBundle\DependencyInjection\Compiler\ResolveDoctrineTargetEntityPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SfsCatalogBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $basePath = realpath(__DIR__.'/Resources/config/doctrine-mapping/');

        $this->addRegisterMappingsPass($container, [$basePath => 'Softspring\CatalogBundle\Model']);

        $container->addCompilerPass(new AliasDoctrineEntityManagerPass());
        $container->addCompilerPass(new ResolveDoctrineTargetEntityPass());
    }

    /**
     * @param string|bool $enablingParameter
     */
    private function addRegisterMappingsPass(ContainerBuilder $container, array $mappings, $enablingParameter = false)
    {
        $container->addCompilerPass(DoctrineOrmMappingsPass::createXmlMappingDriver($mappings, ['sfs_catalog.entity_manager_name'], $enablingParameter));
    }
}
