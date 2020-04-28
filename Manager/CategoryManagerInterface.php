<?php

namespace Softspring\CatalogBundle\Manager;

use Softspring\CatalogBundle\Model\CategoryInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerInterface;

interface CategoryManagerInterface extends CrudlEntityManagerInterface
{
    /**
     * @return CategoryInterface
     */
    public function createEntity();

    /**
     * @param CategoryInterface $entity
     */
    public function saveEntity($entity): void;

    /**
     * @param CategoryInterface $entity
     */
    public function deleteEntity($entity): void;
}