<?php

namespace Softspring\CatalogBundle\Model;

interface ModelInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @return string|null
     */
    public function getSku(): ?string;

    /**
     * @return ProductInterface|null
     */
    public function getProduct(): ?ProductInterface;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @param string|null $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ProductInterface|null $product
     */
    public function setProduct(?ProductInterface $product): void;

    /**
     * @return bool
     */
    public function isDefault(): bool;
}