<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Manager\PackManagerInterface;
use Softspring\CatalogBundle\Model\PackInterface;
use Softspring\DoctrineSimpleTranslationTypeBundle\Form\SimpleTranslationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractPackForm extends AbstractType
{
    /**
     * @var PackManagerInterface
     */
    protected $packManager;

    /**
     * AbstractModelForm constructor.
     */
    public function __construct(PackManagerInterface $packManager)
    {
        $this->packManager = $packManager;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PackInterface::class,
            'translation_domain' => 'sfs_catalog',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($this->packManager->getEntityClassReflection()->hasProperty('translatedName')) {
            $builder->add('translatedName', SimpleTranslationType::class);
        } else {
            $builder->add('name');
        }
    }
}
