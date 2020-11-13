<?php

namespace Softspring\CatalogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Product
 */
abstract class Product implements ProductInterface
{
    public function __construct()
    {
        if ($this instanceof ProductHasModelsInterface) {
            $this->models = new ArrayCollection();
        }
    }
}