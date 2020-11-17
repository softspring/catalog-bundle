<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Model\PackInterface;
use Softspring\CrudlBundle\Manager\DefaultCrudlEntityManager;

class PackManager extends DefaultCrudlEntityManager implements PackManagerInterface
{
    /**
     * @var PackProductManagerInterface
     */
    protected $packProductManager;

    public function __construct(EntityManagerInterface $em, PackProductManagerInterface $packProductManager)
    {
        parent::__construct(PackInterface::class, $em);
        $this->packProductManager = $packProductManager;
    }

    public function createEntity()
    {
        $class = $this->getEntityClass();

        /** @var PackInterface $pack */
        $pack = new $class();
        $pack->addPackProduct($this->packProductManager->createEntity());

        return $pack;
    }
}
