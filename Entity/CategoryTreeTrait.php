<?php

namespace Softspring\CatalogBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Softspring\CatalogBundle\Model\CategoryTreeInterface;

trait CategoryTreeTrait
{
    /**
     * @var CategoryTreeInterface|null
     * @ORM\ManyToOne(targetEntity="Softspring\CatalogBundle\Model\CategoryInterface", inversedBy="subcategories")
     */
    protected $parent;

    /**
     * @var Collection|CategoryTreeInterface[]
     * @ORM\OneToMany(targetEntity="Softspring\CatalogBundle\Model\CategoryInterface", mappedBy="parent", cascade={"persist"})
     */
    protected $subcategories;

    /**
     * @return CategoryTreeInterface|null
     */
    public function getParent(): ?CategoryTreeInterface
    {
        return $this->parent;
    }

    /**
     * @param CategoryTreeInterface|null $parent
     */
    public function setParent(?CategoryTreeInterface $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return Collection|CategoryTreeInterface[]
     */
    public function getSubcategories(): Collection
    {
        return $this->subcategories;
    }

    /**
     * @param CategoryTreeInterface $subcategory
     */
    public function addSubcategory(CategoryTreeInterface $subcategory): void
    {
        if (!$this->subcategories->contains($subcategory)) {
            $this->subcategories->add($subcategory);
            $subcategory->setParent($this);
        }
    }

    /**
     * @param CategoryTreeInterface $subcategory
     */
    public function removeSubcategory(CategoryTreeInterface $subcategory): void
    {
        if ($this->subcategories->contains($subcategory)) {
            $this->subcategories->removeElement($subcategory);
        }
    }
}