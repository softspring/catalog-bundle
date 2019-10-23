<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Softspring\AdminBundle\Manager\AdminEntityManagerTrait;
use Softspring\CatalogBundle\Model\ProductInterface;

class ProductManager implements ProductManagerInterface
{
    use AdminEntityManagerTrait;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * ProductManager constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getTargetClass(): string
    {
        return ProductInterface::class;
    }
}