<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Softspring\CatalogBundle\Model\CategoryInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryDeleteForm extends AbstractType implements CategoryDeleteFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CategoryInterface::class,
            'translation_domain' => 'sfs_catalog',
            'label_format' => 'admin_categories.delete.form.%name%.label',
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }
}
