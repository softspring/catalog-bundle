<?php

namespace Softspring\CatalogBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\ProductHasModelsTrait as ProductHasModelsTraitModel;

trait ProductHasModelsTrait
{
    use ProductHasModelsTraitModel;

    /**
     * @var Collection|ModelInterface[]
     * @ORM\OneToMany(targetEntity="Softspring\CatalogBundle\Model\ModelInterface", mappedBy="product")
     */
    protected $models;

    /**
     * @var ModelInterface|null
     * @ORM\ManyToOne(targetEntity="Softspring\CatalogBundle\Model\ModelInterface")
     * @ORM\JoinColumn(name="default_model_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $defaultModel;
}
