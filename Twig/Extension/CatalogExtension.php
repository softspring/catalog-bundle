<?php

namespace Softspring\CatalogBundle\Twig\Extension;

use Doctrine\Common\Collections\Collection;
use Softspring\CatalogBundle\Manager\CategoryManagerInterface;
use Softspring\CatalogBundle\Manager\ProductManagerInterface;
use Softspring\CatalogBundle\Model\CategoryTreeInterface;
use Softspring\CatalogBundle\Model\ProductHasCategoryInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CatalogExtension extends AbstractExtension
{
    /**
     * @var CategoryManagerInterface|null
     */
    protected $categoryManager;

    /**
     * @var ProductManagerInterface|null
     */
    protected $productManager;

    /**
     * CatalogExtension constructor.
     *
     * @param CategoryManagerInterface|null $categoryManager
     * @param ProductManagerInterface|null  $productManager
     */
    public function __construct(?CategoryManagerInterface $categoryManager, ?ProductManagerInterface $productManager)
    {
        $this->categoryManager = $categoryManager;
        $this->productManager = $productManager;
    }

    /**
     * @inheritDoc
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('sfs_catalog_has_categories', [$this, 'supportsCategories']),
            new TwigFunction('sfs_catalog_has_subcategories', [$this, 'supportsSubcategories']),
            new TwigFunction('sfs_catalog_product_has_categories', [$this, 'productHasCategory']),
            new TwigFunction('sfs_catalog_categories', [$this, 'getCategories']),
        ];
    }

    /**
     * @return bool
     */
    public function supportsCategories(): bool
    {
        return $this->categoryManager instanceof CategoryManagerInterface;
    }

    /**
     * @return bool
     */
    public function supportsSubcategories(): bool
    {
        if (!$this->supportsCategories()) {
            return false;
        }

        return $this->categoryManager->createEntity() instanceof CategoryTreeInterface;
    }

    /**
     * @return bool
     */
    public function productHasCategory(): bool
    {
        if (!$this->supportsCategories()) {
            return false;
        }

        return $this->productManager->createEntity() instanceof ProductHasCategoryInterface;
    }

    /**
     * @return Collection|array
     */
    public function getCategories()
    {
        if (!$this->supportsCategories()) {
            return [];
        }

        return $this->categoryManager->getRepository()->findBy([]);
    }
}