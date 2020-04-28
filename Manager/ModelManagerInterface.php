<?php

namespace Softspring\CatalogBundle\Manager;

use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerInterface;

interface ModelManagerInterface extends CrudlEntityManagerInterface
{
    /**
     * @return ModelInterface
     */
    public function createEntity();

    /**
     * @param ModelInterface $entity
     */
    public function saveEntity($entity): void;

    /**
     * @param ModelInterface $entity
     */
    public function deleteEntity($entity): void;
}