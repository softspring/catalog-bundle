<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Manager\ModelManagerInterface;
use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Softspring\DoctrineSimpleTranslationTypeBundle\Form\SimpleTranslationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractModelForm extends AbstractType
{
    /**
     * @var ModelManagerInterface
     */
    protected $modelManager;

    /**
     * AbstractModelForm constructor.
     *
     * @param ModelManagerInterface $modelManager
     */
    public function __construct(ModelManagerInterface $modelManager)
    {
        $this->modelManager = $modelManager;
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ModelInterface::class,
            'translation_domain' => 'sfs_catalog',
        ]);
    }

    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('sku');
        $builder->add('product', null, [
            'choice_label' => function (ProductInterface $product) {
                return $product->getName();
            },
        ]);

        if ($this->modelManager->getEntityClassReflection()->hasProperty('translatedName')) {
            $builder->add('translatedName', SimpleTranslationType::class);
        } else {
            $builder->add('name');
        }
    }
}