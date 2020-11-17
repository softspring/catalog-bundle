<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface PackHasModelsInterface
{
    /**
     * @return Collection|ModelInterface[]
     */
    public function getModels(): Collection;

    public function addModel(ModelInterface $model): void;

    public function removeModel(ModelInterface $model): void;
}
