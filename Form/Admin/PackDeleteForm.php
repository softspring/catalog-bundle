<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Model\PackInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackDeleteForm extends AbstractType implements PackDeleteFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PackInterface::class,
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_packs.delete.form.%name%.label',
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }
}
