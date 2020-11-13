<?php

namespace Softspring\CatalogBundle\Tests\Model;

use PHPUnit\Framework\TestCase;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Tests\Model\Examples\ModelBasic;
use Softspring\CatalogBundle\Tests\Model\Examples\ProductWithModels;

class ModelTest extends TestCase
{
    public function testInterfaces()
    {
        $this->assertInstanceOf(ModelInterface::class, new ModelBasic());
    }

    public function testName()
    {
        $model = new ModelBasic();
        $model->setName('test name');
        $this->assertEquals('test name', $model->getName());
    }

    public function testSku()
    {
        $model = new ModelBasic();
        $model->setSku('test-sku');
        $this->assertEquals('test-sku', $model->getSku());
    }

    public function testModelWithModels()
    {
        $model = new ModelBasic();
        $product = new ProductWithModels();

        $product->addModel($model);
        $this->assertEquals($product, $model->getProduct());
        $this->assertTrue($model->isDefault());

        $model2 = new ModelBasic();
        $product->setDefaultModel($model2);
        $this->assertFalse($model->isDefault());
    }
}
