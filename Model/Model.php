<?php

namespace Softspring\CatalogBundle\Model;

abstract class Model implements ModelInterface
{
    /**
     * @var ProductInterface|ProductHasModelsInterface|null
     */
    protected $product;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @return ProductInterface|ProductHasModelsInterface|null
     */
    public function getProduct(): ?ProductInterface
    {
        return $this->product;
    }

    /**
     * @param ProductInterface|ProductHasModelsInterface|null $product
     */
    public function setProduct(?ProductInterface $product): void
    {
        $this->product = $product;
    }

    /**
     * {@inheritdoc}
     */
    public function isDefault(): bool
    {
        return $this->getProduct() && $this->getProduct()->getDefaultModel() === $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
}
