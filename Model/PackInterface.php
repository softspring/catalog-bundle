<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\Collection;

interface PackInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;

    /**
     * @return Collection|PackProductInterface[]
     */
    public function getPackProducts(): Collection;

    public function removePackProduct(PackProductInterface $packProduct): void;

    public function addPackProduct(PackProductInterface $packProduct): void;
}
