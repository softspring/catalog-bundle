<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PackCreateForm extends AbstractPackForm implements PackCreateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_packs.create.form.%name%.label',
        ]);
    }
}