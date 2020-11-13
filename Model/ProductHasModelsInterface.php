<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface ProductHasModelsInterface
{
    /**
     * @return Collection|ModelInterface[]
     */
    public function getModels(): Collection;

    public function addModel(ModelInterface $model): void;

    public function removeModel(ModelInterface $model): void;

    public function getDefaultModel(): ?ModelInterface;

    public function setDefaultModel(?ModelInterface $defaultModel): void;
}
