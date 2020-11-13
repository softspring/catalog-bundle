<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface PackInterface
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
     * @return Collection|ProductInterface[]
     */
    public function getProducts(): Collection;

    /**
     * @param ProductInterface $product
     */
    public function addProduct(ProductInterface $product): void;

    /**
     * @param ProductInterface $product
     */
    public function removeProduct(ProductInterface $product): void;
}