<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Model\ModelInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModelUpdateForm extends AbstractType implements ModelUpdateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ModelInterface::class,
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_models.update.form.%name%.label',
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('sku');
        $builder->add('product', null, [
            'choice_label' => function (ProductInterface $product) {
                return $product->getName();
            },
        ]);
        $builder->add('name');
    }
}