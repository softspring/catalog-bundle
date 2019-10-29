<?php

namespace Softspring\CatalogBundle\Controller;

use Softspring\CatalogBundle\Form\CatalogListFilterFormInterface;
use Softspring\CatalogBundle\Manager\ProductManagerInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CoreBundle\Controller\AbstractController;
use Softspring\ShopBundle\Model\SalableItemInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CatalogController extends AbstractController
{
    /**
     * @var ProductManagerInterface
     */
    protected $productManager;

    /**
     * @var CatalogListFilterFormInterface
     */
    protected $listFilterForm;

    /**
     * CatalogController constructor.
     *
     * @param ProductManagerInterface        $productManager
     * @param CatalogListFilterFormInterface $listFilterForm
     */
    public function __construct(ProductManagerInterface $productManager, CatalogListFilterFormInterface $listFilterForm)
    {
        $this->productManager = $productManager;
        $this->listFilterForm = $listFilterForm;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function list(Request $request): Response
    {
        // $this->listFilterForm

        $products = $this->productManager->getRepository()->findBy([]);

        // show view
        $viewData = new \ArrayObject([
            'products' => $products,
        ]);

        return $this->render('@SfsCatalog/catalog/list.html.twig', $viewData->getArrayCopy());
    }

    /**
     * @param ProductInterface|null $product
     * @param Request               $request
     *
     * @return Response
     */
    public function product(?ProductInterface $product, Request $request): Response
    {
        if (!$product instanceof ProductInterface) {
            throw $this->createNotFoundException('Product not found');
        }

        // show view
        $viewData = new \ArrayObject([
            'product' => $product,
            'can_product_added_to_cart' => $product instanceof SalableItemInterface
        ]);

        return $this->render('@SfsCatalog/catalog/product.html.twig', $viewData->getArrayCopy());
    }

    /**
     * @param ProductInterface|null $product
     * @param ModelInterface|null   $model
     * @param Request               $request
     *
     * @return Response
     */
    public function model(?ProductInterface $product, ?ModelInterface $model, Request $request): Response
    {
        if (!$product instanceof ProductInterface) {
            throw $this->createNotFoundException('Product not found');
        }
        if (!$model instanceof ModelInterface) {
            throw $this->createNotFoundException('Model not found');
        }

        // show view
        $viewData = new \ArrayObject([
            'product' => $product,
            'model' => $model,
            'can_model_added_to_cart' => $model instanceof SalableItemInterface
        ]);

        return $this->render('@SfsCatalog/catalog/model.html.twig', $viewData->getArrayCopy());
    }
}