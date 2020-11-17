<?php

namespace Softspring\CatalogBundle\Model;

interface PackProductInterface
{
    public function setPack(?PackInterface $pack): void;

    public function getPack(): ?PackInterface;

    public function getProduct(): ?ProductInterface;

    public function setProduct(?ProductInterface $product): void;

    public function setQuantity(?int $quantity): void;

    public function getQuantity(): ?int;
}
