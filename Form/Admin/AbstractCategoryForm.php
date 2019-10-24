<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Manager\CategoryManagerInterface;
use Softspring\CatalogBundle\Model\CategoryInterface;
use Softspring\DoctrineSimpleTranslationTypeBundle\Form\SimpleTranslationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractCategoryForm extends AbstractType
{
    /**
     * @var CategoryManagerInterface
     */
    protected $categoryManager;

    /**
     * AbstractModelForm constructor.
     *
     * @param CategoryManagerInterface $categoryManager
     */
    public function __construct(CategoryManagerInterface $categoryManager)
    {
        $this->categoryManager = $categoryManager;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CategoryInterface::class,
            'translation_domain' => 'sfs_catalog',
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($this->categoryManager->getEntityClassReflection()->hasProperty('translatedName')) {
            $builder->add('translatedName', SimpleTranslationType::class);
        } else {
            $builder->add('name');
        }
    }
}