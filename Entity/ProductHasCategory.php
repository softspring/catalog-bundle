<?php

namespace Softspring\CatalogBundle\Entity;

use Softspring\CatalogBundle\Model\CategoryInterface;

trait ProductHasCategory
{
    /**
     * @var CategoryInterface|null
     * @ORM\ManyToOne(targetEntity="Softspring\CatalogBundle\Model\CategoryInterface")
     */
    protected $category;

    /**
     * @return CategoryInterface|null
     */
    public function getCategory(): ?CategoryInterface
    {
        return $this->category;
    }

    /**
     * @param CategoryInterface|null $category
     */
    public function setCategory(?CategoryInterface $category): void
    {
        $this->category = $category;
    }
}