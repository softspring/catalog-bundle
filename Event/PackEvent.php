<?php

namespace Softspring\CatalogBundle\Event;

use Softspring\CatalogBundle\Model\PackInterface;
use Softspring\CoreBundle\Event\RequestEvent;
use Symfony\Component\HttpFoundation\Request;

class PackEvent extends RequestEvent
{
    /**
     * @var PackInterface
     */
    protected $pack;

    /**
     * PackEvent constructor.
     *
     * @param PackInterface $pack
     * @param Request|null     $request
     */
    public function __construct(PackInterface $pack, ?Request $request)
    {
        parent::__construct($request);
        $this->pack = $pack;
    }

    /**
     * @return PackInterface
     */
    public function getPack(): PackInterface
    {
        return $this->pack;
    }
}