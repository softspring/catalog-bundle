<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerTrait;

class ProductManager implements ProductManagerInterface
{
    use CrudlEntityManagerTrait;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * ProductManager constructor.
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
