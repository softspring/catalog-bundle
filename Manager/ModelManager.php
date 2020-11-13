<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerTrait;

class ModelManager implements ModelManagerInterface
{
    use CrudlEntityManagerTrait;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * ModelManager constructor.
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getTargetClass(): string
    {
        return ModelInterface::class;
    }
}
