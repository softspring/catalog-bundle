<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;

class PackProductCollectionType extends AbstractType
{
    public function getParent()
    {
        return CollectionType::class;
    }

    public function getBlockPrefix()
    {
        return 'pack_product_collection';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'entry_type'   => PackProductType::class,
            'required' => false,
            'constraints' => new Count(['min' => 1]),
            'allow_add' => true,
            'allow_delete' => true,

//            'class' => ProductInterface::class,
//            'em' => $this->em,
//            'query_builder' => function (EntityRepository $entityRepository) {
//                $qb = $entityRepository->createQueryBuilder('p');
//                return $qb;
//            },
//            'choice_label' => function (ProductInterface $product) {
//                return $product->getName();
//            },
//            'by_reference' => false,
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }


}