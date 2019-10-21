<?php

namespace Softspring\CatalogBundle\Model;

interface ProductHasCategoryInterface extends CategoryInterface
{
    /**
     * @return CategoryInterface|null
     */
    public function getCategory(): ?CategoryInterface;

    /**
     * @param CategoryInterface $category
     */
    public function setCategory(CategoryInterface $category): void;
}