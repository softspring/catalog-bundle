<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface CategoryInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return CategoryInterface|null
     */
    public function getParent(): ?CategoryInterface;

    /**
     * @return Collection|CategoryInterface[]
     */
    public function getSubcategories(): Collection;

    /**
     * @return Collection|ProductInterface[]
     */
    public function getProducts(): Collection;
}