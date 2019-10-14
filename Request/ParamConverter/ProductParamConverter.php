<?php

namespace Softspring\CatalogBundle\Request\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\CatalogBundle\Manager\ProductManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class ProductParamConverter implements ParamConverterInterface
{
    /**
     * @var ProductManagerInterface
     */
    protected $manager;

    /**
     * ProductParamConverter constructor.
     * @param ProductManagerInterface $manager
     */
    public function __construct(ProductManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function apply(Request $request, ParamConverter $configuration)
    {
        $query = $request->attributes->get($configuration->getName());
        $entity = $this->manager->getRepository()->findOneBy(['id' => $query]);
        $request->attributes->set($configuration->getName(), $entity);
    }

    public function supports(ParamConverter $configuration)
    {
        return $configuration->getClass() === ProductInterface::class;
    }
}