<?php

namespace Softspring\CatalogBundle\Controller;

use Softspring\CatalogBundle\Form\CatalogListFilterFormInterface;
use Softspring\CatalogBundle\Manager\ProductManagerInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\ExtraBundle\Controller\AbstractController;
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
     * @param ProductInterface $product
     * @param Request          $request
     *
     * @return Response
     */
    public function product(ProductInterface $product, Request $request): Response
    {
        // show view
        $viewData = new \ArrayObject([
            'product' => $product,
        ]);

        return $this->render('@SfsCatalog/catalog/product.html.twig', $viewData->getArrayCopy());
    }

    /**
     * @param ProductInterface $product
     * @param ModelInterface   $model
     * @param Request          $request
     *
     * @return Response
     */
    public function model(ProductInterface $product, ModelInterface $model, Request $request): Response
    {
        // show view
        $viewData = new \ArrayObject([
            'product' => $product,
            'model' => $model,
        ]);

        return $this->render('@SfsCatalog/catalog/model.html.twig', $viewData->getArrayCopy());
    }
}