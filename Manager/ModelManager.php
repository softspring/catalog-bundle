<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Softspring\AdminBundle\Manager\AdminEntityManagerTrait;
use Softspring\CatalogBundle\Model\ModelInterface;

class ModelManager implements ModelManagerInterface
{
    use AdminEntityManagerTrait;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * ModelManager constructor.
     * @param EntityManagerInterface $em
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