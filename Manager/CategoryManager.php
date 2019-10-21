<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Softspring\CatalogBundle\Model\CategoryInterface;

class CategoryManager implements CategoryManagerInterface
{
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
    public function getClass(): string
    {
        return CategoryInterface::class;
    }

    /**
     * @inheritDoc
     */
    public function getRepository(): EntityRepository
    {
        return $this->em->getRepository($this->getClass());
    }

    /**
     * @inheritDoc
     */
    public function createEntity()
    {
        $metadata = $this->em->getClassMetadata($this->getClass());
        $class = $metadata->getReflectionClass()->name;
        return new $class;
    }

    /**
     * @inheritDoc
     */
    public function saveEntity($entity): void
    {
        if (!$entity instanceof CategoryInterface) {
            throw new \InvalidArgumentException(sprintf('$entity must be an instance of %s', CategoryInterface::class));
        }

        $this->em->persist($entity);
        $this->em->flush();
    }
}