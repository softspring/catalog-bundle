<?php

namespace Softspring\CatalogBundle\Model;

interface ProductHasCategoryInterface extends CategoryInterface
{
    public function getCategory(): ?CategoryInterface;

    public function setCategory(CategoryInterface $category): void;
}
