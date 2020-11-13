<?php

namespace Softspring\CatalogBundle\Tests\Model;

use PHPUnit\Framework\TestCase;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CatalogBundle\Tests\Model\Examples\ModelBasic;
use Softspring\CatalogBundle\Tests\Model\Examples\ProductBasic;
use Softspring\CatalogBundle\Tests\Model\Examples\ProductWithModels;

class ProductTest extends TestCase
{
    public function testInterfaces()
    {
        $this->assertInstanceOf(ProductInterface::class, new ProductBasic());
    }

    public function testName()
    {
        $product = new ProductBasic();
        $product->setName('test name');
        $this->assertEquals('test name', $product->getName());
    }

    public function testProductWithModels()
    {
        $product = new ProductWithModels();
        $this->assertEmpty($product->getModels());
        $this->assertEmpty($product->getDefaultModel());

        $model1 = new ModelBasic();
        $product->addModel($model1);
        $this->assertCount(1, $product->getModels());
        $this->assertEquals($model1, $product->getDefaultModel());

        $model2 = new ModelBasic();
        $product->addModel($model2);
        $this->assertCount(2, $product->getModels());
        $this->assertEquals($model1, $product->getDefaultModel());

        $product->setDefaultModel($model2);
        $this->assertEquals($model2, $product->getDefaultModel());

        $product->removeModel($model2);
        $this->assertCount(1, $product->getModels());
        $this->assertEmpty($product->getDefaultModel());

        $product->removeModel($model1);
        $this->assertEmpty($product->getModels());
        $this->assertEmpty($product->getDefaultModel());
    }
}
