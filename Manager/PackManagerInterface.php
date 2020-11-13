<?php

namespace Softspring\CatalogBundle\Manager;

use Softspring\CatalogBundle\Model\PackInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerInterface;

interface PackManagerInterface extends CrudlEntityManagerInterface
{
    /**
     * @return PackInterface
     */
    public function createEntity();

    /**
     * @param PackInterface $pack
     */
    public function saveEntity($pack): void;

    /**
     * @param PackInterface $pack
     */
    public function deleteEntity($pack): void;
}
