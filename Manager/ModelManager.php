<?php

namespace Softspring\CatalogBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Softspring\CatalogBundle\Model\ModelInterface;

class ModelManager implements ModelManagerInterface
{
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

    public function getClass(): string
    {
        return ModelInterface::class;
    }

    public function getRepository(): EntityRepository
    {
        return $this->em->getRepository($this->getClass());
    }

    public function createEntity()
    {
        $metadata = $this->em->getClassMetadata($this->getClass());
        $class = $metadata->getReflectionClass()->name;
        return new $class;
    }

    public function saveEntity($entity): void
    {
        if (!$entity instanceof ModelInterface) {
            throw new \InvalidArgumentException(sprintf('$entity must be an instance of %s', ModelInterface::class));
        }

        $this->em->persist($entity);
        $this->em->flush();
    }
}