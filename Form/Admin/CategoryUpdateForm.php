<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryUpdateForm extends AbstractCategoryForm implements CategoryUpdateFormInterface
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label_format' => 'admin_categories.update.form.%name%.label',
        ]);
    }
}