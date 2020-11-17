<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Model\PackProductInterface;
use Softspring\CrudlBundle\Manager\DefaultCrudlEntityManager;

class PackProductManager extends DefaultCrudlEntityManager implements PackProductManagerInterface
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct(PackProductInterface::class, $em);
    }
}