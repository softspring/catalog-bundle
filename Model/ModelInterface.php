<?php

namespace Softspring\CatalogBundle\Model;

interface ModelInterface
{
    public function getName(): ?string;

    public function getSku(): ?string;

    public function getProduct(): ?ProductInterface;

    public function setName(?string $name): void;

    public function setSku(?string $sku): void;

    public function setProduct(?ProductInterface $product): void;

    public function isDefault(): bool;
}
