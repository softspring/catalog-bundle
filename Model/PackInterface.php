<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface PackInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;

    /**
     * @return Collection|ProductInterface[]
     */
    public function getProducts(): Collection;

    public function addProduct(ProductInterface $product): void;

    public function removeProduct(ProductInterface $product): void;
}
