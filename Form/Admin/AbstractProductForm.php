<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Manager\ProductManagerInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\DoctrineSimpleTranslationTypeBundle\Form\SimpleTranslationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractProductForm extends AbstractType
{
    /**
     * @var ProductManagerInterface
     */
    protected $productManager;

    /**
     * AbstractModelForm constructor.
     */
    public function __construct(ProductManagerInterface $productManager)
    {
        $this->productManager = $productManager;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProductInterface::class,
            'translation_domain' => 'sfs_catalog',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($this->productManager->getEntityClassReflection()->hasProperty('translatedName')) {
            $builder->add('translatedName', SimpleTranslationType::class);
        } else {
            $builder->add('name');
        }
    }
}
