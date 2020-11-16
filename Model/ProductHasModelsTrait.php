<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

trait ProductHasModelsTrait
{
    /**
     * @var Collection|ModelInterface[]
     */
    protected $models;

    /**
     * @var ModelInterface|null
     */
    protected $defaultModel;

    public function getModels(): Collection
    {
        return $this->models;
    }

    public function addModel(ModelInterface $model): void
    {
        /** @var ProductInterface|ProductHasModelsInterface $this */
        if (!$this->getModels()->contains($model)) {
            $this->getModels()->add($model);
            $model->setProduct($this);

            if (1 == $this->getModels()->count()) {
                $this->setDefaultModel($model);
            }
        }
    }

    public function removeModel(ModelInterface $model): void
    {
        if ($this->getModels()->contains($model)) {
            $this->getModels()->removeElement($model);

            if ($this->getDefaultModel() === $model) {
                $this->setDefaultModel(null);
            }
        }
    }

    public function getDefaultModel(): ?ModelInterface
    {
        return $this->defaultModel;
    }

    public function setDefaultModel(?ModelInterface $defaultModel): void
    {
        $this->defaultModel = $defaultModel;
    }
}
