<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductCreateForm extends AbstractProductForm implements ProductCreateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_products.create.form.%name%.label',
        ]);
    }
}
