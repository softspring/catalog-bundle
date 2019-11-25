<?php

namespace Softspring\CatalogBundle\Event;

use Softspring\CoreBundle\Event\GetResponseEventInterface;
use Softspring\CoreBundle\Event\GetResponseTrait;

class GetResponseModelEvent extends ModelEvent implements GetResponseEventInterface
{
    use GetResponseTrait;
}