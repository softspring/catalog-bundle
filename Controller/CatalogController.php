<?php

namespace Softspring\CatalogBundle\Controller;

use Softspring\CatalogBundle\Event\GetResponseModelEvent;
use Softspring\CatalogBundle\Event\GetResponseProductEvent;
use Softspring\CatalogBundle\Form\CatalogListFilterFormInterface;
use Softspring\CatalogBundle\Manager\ProductManagerInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CatalogBundle\SfsCatalogEvents;
use Softspring\CoreBundle\Controller\AbstractController;
use Softspring\CoreBundle\Event\GetResponseRequestEvent;
use Softspring\CoreBundle\Event\ViewEvent;
use Softspring\ShopBundle\Model\SalableItemInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
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
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * CatalogController constructor.
     *
     * @param ProductManagerInterface        $productManager
     * @param CatalogListFilterFormInterface $listFilterForm
     * @param EventDispatcherInterface       $eventDispatcher
     */
    public function __construct(ProductManagerInterface $productManager, CatalogListFilterFormInterface $listFilterForm, EventDispatcherInterface $eventDispatcher)
    {
        $this->productManager = $productManager;
        $this->listFilterForm = $listFilterForm;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function list(Request $request): Response
    {
        if ($response = $this->dispatchGetResponse(SfsCatalogEvents::CATALOG_LIST_INITIALIZE, new GetResponseRequestEvent($request))) {
            return $response;
        }

        // $this->listFilterForm

        $products = $this->productManager->getRepository()->findBy([]);

        // show view
        $viewData = new \ArrayObject([
            'products' => $products,
        ]);

        $this->eventDispatcher->dispatch(new ViewEvent($viewData), SfsCatalogEvents::CATALOG_LIST_VIEW);

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

        if ($response = $this->dispatchGetResponse(SfsCatalogEvents::CATALOG_PRODUCT_INITIALIZE, new GetResponseProductEvent($product, $request))) {
            return $response;
        }

        // show view
        $viewData = new \ArrayObject([
            'product' => $product,
            'can_product_added_to_cart' => $product instanceof SalableItemInterface
        ]);

        $this->eventDispatcher->dispatch(new ViewEvent($viewData), SfsCatalogEvents::CATALOG_PRODUCT_VIEW);

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

        if ($response = $this->dispatchGetResponse(SfsCatalogEvents::CATALOG_MODEL_INITIALIZE, new GetResponseModelEvent($model, $request))) {
            return $response;
        }

        // show view
        $viewData = new \ArrayObject([
            'product' => $product,
            'model' => $model,
            'can_model_added_to_cart' => $model instanceof SalableItemInterface
        ]);

        $this->eventDispatcher->dispatch(new ViewEvent($viewData), SfsCatalogEvents::CATALOG_MODEL_VIEW);

        return $this->render('@SfsCatalog/catalog/model.html.twig', $viewData->getArrayCopy());
    }
}