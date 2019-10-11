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
}