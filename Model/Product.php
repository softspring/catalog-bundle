<?php

namespace Softspring\CatalogBundle\Model;

/**
 * Class Product
 */
class Product implements ProductInterface
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}