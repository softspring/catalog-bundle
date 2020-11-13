<?php

namespace Softspring\CatalogBundle\Event;

use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CoreBundle\Event\RequestEvent;
use Symfony\Component\HttpFoundation\Request;

class ProductEvent extends RequestEvent
{
    /**
     * @var ProductInterface
     */
    protected $product;

    /**
     * ProductEvent constructor.
     */
    public function __construct(ProductInterface $product, ?Request $request)
    {
        parent::__construct($request);
        $this->product = $product;
    }

    public function getProduct(): ProductInterface
    {
        return $this->product;
    }
}
