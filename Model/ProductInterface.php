<?php

namespace Softspring\CatalogBundle\Model;

interface ProductInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
