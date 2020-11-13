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

    /**
     * @return Collection
     */
    public function getModels(): Collection
    {
        return $this->models;
    }

    /**
     * @param ModelInterface $model
     */
    public function addModel(ModelInterface $model): void
    {
        /** @var ProductInterface $this */

        if (!$this->models->contains($model)) {
            $this->models->add($model);
            $model->setProduct($this);

            if ($this instanceof ProductHasModelsInterface && $this->getModels()->count()==1) {
                $this->setDefaultModel($model);
            }
        }
    }

    /**
     * @param ModelInterface $model
     */
    public function removeModel(ModelInterface $model): void
    {
        if ($this->models->contains($model)) {
            $this->models->removeElement($model);
        }
    }

    /**
     * @return ModelInterface|null
     */
    public function getDefaultModel(): ?ModelInterface
    {
        return $this->defaultModel;
    }

    /**
     * @param ModelInterface|null $defaultModel
     */
    public function setDefaultModel(?ModelInterface $defaultModel): void
    {
        $this->defaultModel = $defaultModel;
    }
}