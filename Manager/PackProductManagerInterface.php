<?php

namespace Softspring\CatalogBundle\Manager;

use Softspring\CatalogBundle\Model\PackProductInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerInterface;

interface PackProductManagerInterface extends CrudlEntityManagerInterface
{
    /**
     * @return PackProductInterface
     */
    public function createEntity();

    /**
     * @param PackProductInterface $packProduct
     */
    public function saveEntity($packProduct): void;

    /**
     * @param PackProductInterface $packProduct
     */
    public function deleteEntity($packProduct): void;
}
