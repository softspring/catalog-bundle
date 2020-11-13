<?php

namespace Softspring\CatalogBundle\Manager;

use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerInterface;

interface ProductManagerInterface extends CrudlEntityManagerInterface
{
    /**
     * @return ProductInterface
     */
    public function createEntity();

    /**
     * @param ProductInterface $entity
     */
    public function saveEntity($entity): void;

    /**
     * @param ProductInterface $entity
     */
    public function deleteEntity($entity): void;
}
