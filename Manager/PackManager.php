<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Model\PackInterface;
use Softspring\CrudlBundle\Manager\DefaultCrudlEntityManager;

class PackManager extends DefaultCrudlEntityManager implements PackManagerInterface
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct(PackInterface::class, $em);
    }
}
