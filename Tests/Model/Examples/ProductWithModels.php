<?php

namespace Softspring\CatalogBundle\Tests\Model\Examples;

use Softspring\CatalogBundle\Entity\NameTrait;
use Softspring\CatalogBundle\Entity\ProductHasModelsTrait;
use Softspring\CatalogBundle\Model\Product;
use Softspring\CatalogBundle\Model\ProductHasModelsInterface;

class ProductWithModels extends Product implements ProductHasModelsInterface
{
    use NameTrait;
    use ProductHasModelsTrait;
}
