<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

abstract class Pack implements PackInterface
{
    /**
     * @var Collection|ProductInterface[]
     */
    protected $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(ProductInterface $product): void
    {
        if (!$this->getProducts()->contains($product)) {
            $this->getProducts()->add($product);
        }
    }

    public function removeProduct(ProductInterface $product): void
    {
        if ($this->getProducts()->contains($product)) {
            $this->getProducts()->removeElement($product);
        }
    }
}