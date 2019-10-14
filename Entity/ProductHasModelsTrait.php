<?php

namespace Softspring\CatalogBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Softspring\CatalogBundle\Model\ModelInterface;

trait ProductHasModelsTrait
{
    /**
     * @var Collection|ModelInterface[]
     * @ORM\OneToMany(targetEntity="Softspring\CatalogBundle\Model\ModelInterface", mappedBy="product")
     */
    protected $models;

    /**
     * @return Collection
     */
    public function getModels(): Collection
    {
        return $this->models;
    }

    /**
     * @param ModelInterface $model
     */
    public function addModel(ModelInterface $model): void
    {
        if (!$this->models->contains($model)) {
            $this->models->add($model);
            $model->setProduct($this);
        }
    }

    /**
     * @param ModelInterface $model
     */
    public function removeModel(ModelInterface $model): void
    {
        if ($this->models->contains($model)) {
            $this->models->removeElement($model);
        }
    }
}