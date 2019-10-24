<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductUpdateForm extends AbstractProductForm implements ProductUpdateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label_format' => 'admin_products.update.form.%name%.label',
        ]);
    }
}