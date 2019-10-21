<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface CategoryTreeInterface extends CategoryInterface
{
    /**
     * @return CategoryTreeInterface|null
     */
    public function getParent(): ?CategoryTreeInterface;

    /**
     * @param CategoryTreeInterface $parent
     */
    public function setParent(CategoryTreeInterface $parent): void;

    /**
     * @return Collection|CategoryTreeInterface[]
     */
    public function getSubcategories(): Collection;

    /**
     * @param CategoryTreeInterface $subcategory
     */
    public function addSubcategory(CategoryTreeInterface $subcategory): void;

    /**
     * @param CategoryTreeInterface $subcategory
     */
    public function removeSubcategory(CategoryTreeInterface $subcategory): void;
}