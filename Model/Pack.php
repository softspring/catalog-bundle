<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

abstract class Pack implements PackInterface
{
    /**
     * @var Collection|PackProductInterface[]
     */
    protected $packProducts;

    public function __construct()
    {
        $this->packProducts = new ArrayCollection();
    }

    public function getPackProducts(): Collection
    {
        return $this->packProducts;
    }

    public function addPackProduct(PackProductInterface $packProduct): void
    {
        if (!$this->getPackProducts()->contains($packProduct)) {
            $this->getPackProducts()->add($packProduct);
            $packProduct->setPack($this);
        }
    }

    public function removePackProduct(PackProductInterface $packProduct): void
    {
        if ($this->getPackProducts()->contains($packProduct)) {
            $this->getPackProducts()->removeElement($packProduct);
        }
    }
}
