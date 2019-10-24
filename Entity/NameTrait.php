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