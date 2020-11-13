<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface CategoryTreeInterface extends CategoryInterface
{
    public function getParent(): ?CategoryTreeInterface;

    public function setParent(CategoryTreeInterface $parent): void;

    /**
     * @return Collection|CategoryTreeInterface[]
     */
    public function getSubcategories(): Collection;

    public function addSubcategory(CategoryTreeInterface $subcategory): void;

    public function removeSubcategory(CategoryTreeInterface $subcategory): void;
}
