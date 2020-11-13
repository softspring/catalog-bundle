<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ModelUpdateForm extends AbstractModelForm implements ModelUpdateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_models.update.form.%name%.label',
        ]);
    }
}
