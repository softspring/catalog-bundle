<?php

namespace Softspring\CatalogBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\PackHasModelsTrait as PackHasModelsTraitModel;

trait PackHasModelsTrait
{
    use PackHasModelsTraitModel;

    /**
     * @var Collection|ModelInterface[]
     * @ORM\OneToMany(targetEntity="Softspring\CatalogBundle\Model\ModelInterface", mappedBy="product")
     */
    protected $models;
}
