<?php

namespace Softspring\CatalogBundle\Model;

interface CategoryInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
