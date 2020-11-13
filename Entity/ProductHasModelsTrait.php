<?php

namespace Softspring\CatalogBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\ProductHasModelsInterface;
use Softspring\CatalogBundle\Model\ProductInterface;

trait ProductHasModelsTrait
{
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

    public function getModels(): Collection
    {
        return $this->models;
    }

    public function addModel(ModelInterface $model): void
    {
        /** @var ProductInterface $this */
        if (!$this->models->contains($model)) {
            $this->models->add($model);
            $model->setProduct($this);

            if ($this instanceof ProductHasModelsInterface && 1 == $this->getModels()->count()) {
                $this->setDefaultModel($model);
            }
        }
    }

    public function removeModel(ModelInterface $model): void
    {
        if ($this->models->contains($model)) {
            $this->models->removeElement($model);

            if ($this instanceof ProductHasModelsInterface && $this->getDefaultModel() === $model) {
                $this->setDefaultModel(null);
            }
        }
    }

    public function getDefaultModel(): ?ModelInterface
    {
        return $this->defaultModel;
    }

    public function setDefaultModel(?ModelInterface $defaultModel): void
    {
        $this->defaultModel = $defaultModel;
    }
}
