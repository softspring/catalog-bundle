<?php

namespace Softspring\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CatalogListFilterForm extends AbstractType implements CatalogListFilterFormInterface
{
    public function getBlockPrefix()
    {
        return '';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'method' => 'GET',
            'required' => false,
            'attr' => ['novalidate'=>'novalidate'],
            'allow_extra_fields' => true,
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'catalog.list.filter_form.%name%.label',
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }
}