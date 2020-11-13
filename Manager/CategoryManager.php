<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Model\CategoryInterface;
use Softspring\CrudlBundle\Manager\CrudlEntityManagerTrait;

class CategoryManager implements CategoryManagerInterface
{
    use CrudlEntityManagerTrait;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * CategoryManager constructor.
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * {@inheritdoc}
     */
    public function getTargetClass(): string
    {
        return CategoryInterface::class;
    }
}
