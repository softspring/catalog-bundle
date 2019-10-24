<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryCreateForm extends AbstractCategoryForm implements CategoryCreateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label_format' => 'admin_categories.create.form.%name%.label',
        ]);
    }
}