<?php

namespace Softspring\CatalogBundle\Twig\Extension;

use Doctrine\Common\Collections\Collection;
use Softspring\CatalogBundle\Manager\CategoryManagerInterface;
use Softspring\CatalogBundle\Manager\PackManagerInterface;
use Softspring\CatalogBundle\Manager\ProductManagerInterface;
use Softspring\CatalogBundle\Model\CategoryTreeInterface;
use Softspring\CatalogBundle\Model\ProductHasCategoryInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
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
     * @var PackManagerInterface|null
     */
    protected $packManager;

    /**
     * CatalogExtension constructor.
     */
    public function __construct(?CategoryManagerInterface $categoryManager, ?ProductManagerInterface $productManager, ?PackManagerInterface $packManager)
    {
        $this->categoryManager = $categoryManager;
        $this->productManager = $productManager;
        $this->packManager = $packManager;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('sfs_catalog_has_categories', [$this, 'supportsCategories'], ['deprecated' => true]),
            new TwigFunction('sfs_catalog_supports_categories', [$this, 'supportsCategories']),
            new TwigFunction('sfs_catalog_has_subcategories', [$this, 'supportsSubcategories'], ['deprecated' => true]),
            new TwigFunction('sfs_catalog_supports_subcategories', [$this, 'supportsSubcategories']),
            new TwigFunction('sfs_catalog_supports_packs', [$this, 'supportsPacks']),
            new TwigFunction('sfs_catalog_product_has_categories', [$this, 'productHasCategory']),
            new TwigFunction('sfs_catalog_categories', [$this, 'getCategories']),
            new TwigFunction('sfs_catalog_product', [$this, 'getProduct']),
        ];
    }

    public function supportsCategories(): bool
    {
        return $this->categoryManager instanceof CategoryManagerInterface;
    }

    public function supportsPacks(): bool
    {
        return $this->packManager instanceof PackManagerInterface;
    }

    public function supportsSubcategories(): bool
    {
        if (!$this->supportsCategories()) {
            return false;
        }

        return $this->categoryManager->createEntity() instanceof CategoryTreeInterface;
    }

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

    public function getProduct(array $criteria): ?ProductInterface
    {
        /** @var ProductInterface|null $product */
        $product = $this->productManager->getRepository()->findOneBy($criteria);

        return $product;
    }
}
