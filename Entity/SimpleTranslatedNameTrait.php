<?php

namespace Softspring\CatalogBundle\Entity;

use Softspring\DoctrineSimpleTranslationTypeBundle\Model\SimpleTranslation;

trait SimpleTranslatedNameTrait
{
    /**
     * @var SimpleTranslation
     * @ORM\Column(name="translated_name", type="simple_translation", nullable=false)
     */
    protected $translatedName;

    /**
     * {@inheritdoc}
     */
    public function getName(): ?string
    {
        return $this->getTranslatedName()->translate(null);
    }

    /**
     * {@inheritdoc}
     */
    public function setName(?string $name): void
    {
        $this->getTranslatedName()->setTranslation(null, $name);
    }

    public function getTranslatedName(): SimpleTranslation
    {
        return $this->translatedName;
    }

    public function setTranslatedName(SimpleTranslation $translatedName): void
    {
        $this->translatedName = $translatedName;
    }
}
