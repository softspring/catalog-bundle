<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\AdminBundle\Manager\AdminEntityManagerTrait;
use Softspring\CatalogBundle\Model\CategoryInterface;

class CategoryManager implements CategoryManagerInterface
{
    use AdminEntityManagerTrait;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * CategoryManager constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @inheritDoc
     */
    public function getTargetClass(): string
    {
        return CategoryInterface::class;
    }
}