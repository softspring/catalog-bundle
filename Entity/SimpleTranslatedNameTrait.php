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
     * @inheritDoc
     */
    public function getName(): ?string
    {
        return $this->getTranslatedName()->translate(null);
    }

    /**
     * @inheritDoc
     */
    public function setName(?string $name): void
    {
        $this->getTranslatedName()->setTranslation(null, $name);
    }

    /**
     * @return SimpleTranslation
     */
    public function getTranslatedName(): SimpleTranslation
    {
        return $this->translatedName;
    }

    /**
     * @param SimpleTranslation $translatedName
     */
    public function setTranslatedName(SimpleTranslation $translatedName): void
    {
        $this->translatedName = $translatedName;
    }
}