<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Model\ProductInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductDeleteForm extends AbstractType implements ProductDeleteFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProductInterface::class,
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_products.delete.form.%name%.label',
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }
}
