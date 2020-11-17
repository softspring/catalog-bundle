<?php

namespace Softspring\CatalogBundle\Model;

class PackProduct implements PackProductInterface
{
    /**
     * @var PackInterface|null
     */
    protected $pack;

    /**
     * @var ProductInterface|null
     */
    protected $product;

    /**
     * @var int|null
     */
    protected $quantity = 1;

    public function getPack(): ?PackInterface
    {
        return $this->pack;
    }

    public function setPack(?PackInterface $pack): void
    {
        $this->pack = $pack;
    }

    public function getProduct(): ?ProductInterface
    {
        return $this->product;
    }

    public function setProduct(?ProductInterface $product): void
    {
        $this->product = $product;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
}