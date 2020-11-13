<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ModelCreateForm extends AbstractModelForm implements ModelCreateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_models.create.form.%name%.label',
        ]);
    }
}
