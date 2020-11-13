<?php

namespace Softspring\CatalogBundle\Event;

use Softspring\CoreBundle\Event\GetResponseEventInterface;
use Softspring\CoreBundle\Event\GetResponseTrait;

class GetResponseProductEvent extends ProductEvent implements GetResponseEventInterface
{
    use GetResponseTrait;
}
