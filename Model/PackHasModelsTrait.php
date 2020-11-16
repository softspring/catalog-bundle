<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

trait PackHasModelsTrait
{
    /**
     * @var Collection|ModelInterface[]
     */
    protected $models;

    /**
     * @return Collection|ModelInterface[]
     */
    public function getModels(): Collection
    {
        return $this->models;
    }

    public function addModel(ModelInterface $model): void
    {
        if (!$this->getModels()->contains($model)) {
            $this->getModels()->add($model);
        }
    }

    public function removeModel(ModelInterface $model): void
    {
        if ($this->getModels()->contains($model)) {
            $this->getModels()->removeElement($model);
        }
    }
}