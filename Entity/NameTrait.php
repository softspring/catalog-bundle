<?php

namespace Softspring\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

trait NameTrait
{
    /**
     * @var string|null
     * @ORM\Column(name="name", type="string", nullable=false, length=180)
     */
    protected $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
