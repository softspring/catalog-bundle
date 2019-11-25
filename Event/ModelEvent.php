<?php

namespace Softspring\CatalogBundle\Event;

use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CoreBundle\Event\RequestEvent;
use Symfony\Component\HttpFoundation\Request;

class ModelEvent extends RequestEvent
{
    /**
     * @var ModelInterface
     */
    protected $model;

    /**
     * ModelEvent constructor.
     *
     * @param ModelInterface $model
     * @param Request|null   $request
     */
    public function __construct(ModelInterface $model, ?Request $request)
    {
        parent::__construct($request);
        $this->model = $model;
    }

    /**
     * @return ModelInterface
     */
    public function getModel(): ModelInterface
    {
        return $this->model;
    }
}