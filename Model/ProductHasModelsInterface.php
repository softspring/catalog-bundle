<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface ProductHasModelsInterface
{
    /**
     * @return Collection|ModelInterface[]
     */
    public function getModels(): Collection;

    /**
     * @param ModelInterface $model
     */
    public function addModel(ModelInterface $model): void;

    /**
     * @param ModelInterface $model
     */
    public function removeModel(ModelInterface $model): void;

    /**
     * @return ModelInterface|null
     */
    public function getDefaultModel(): ?ModelInterface;

    /**
     * @param ModelInterface|null $defaultModel
     */
    public function setDefaultModel(?ModelInterface $defaultModel): void;
}