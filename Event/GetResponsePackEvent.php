<?php

namespace Softspring\CatalogBundle\Event;

use Softspring\CoreBundle\Event\GetResponseEventInterface;
use Softspring\CoreBundle\Event\GetResponseTrait;

class GetResponsePackEvent extends PackEvent implements GetResponseEventInterface
{
    use GetResponseTrait;
}