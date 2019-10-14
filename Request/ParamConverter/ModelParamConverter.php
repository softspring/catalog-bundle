<?php

namespace Softspring\CatalogBundle\Request\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Manager\ModelManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class ModelParamConverter implements ParamConverterInterface
{
    /**
     * @var ModelManagerInterface
     */
    protected $manager;

    /**
     * ModelParamConverter constructor.
     * @param ModelManagerInterface $manager
     */
    public function __construct(ModelManagerInterface $manager)
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
        return $configuration->getClass() === ModelInterface::class;
    }
}