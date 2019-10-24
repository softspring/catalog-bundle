<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductCreateForm extends AbstractProductForm implements ProductCreateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label_format' => 'admin_products.create.form.%name%.label',
        ]);
    }
}