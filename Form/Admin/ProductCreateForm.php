<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Model\ProductInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductCreateForm extends AbstractType implements ProductCreateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProductInterface::class,
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_products.create.form.%name%.label',
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }
}