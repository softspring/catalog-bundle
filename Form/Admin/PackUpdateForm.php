<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PackUpdateForm extends AbstractPackForm implements PackUpdateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_packs.update.form.%name%.label',
        ]);
    }
}
