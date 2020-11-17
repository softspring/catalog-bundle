<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Manager\PackProductManagerInterface;
use Softspring\CatalogBundle\Model\PackProductInterface;
use Softspring\CatalogBundle\Model\ProductInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackProductType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var PackProductManagerInterface
     */
    protected $packProductManager;

    public function __construct(EntityManagerInterface $em, PackProductManagerInterface $packProductManager)
    {
        $this->em = $em;
        $this->packProductManager = $packProductManager;
    }

    public function getBlockPrefix()
    {
        return 'pack_product';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $packProductManager = $this->packProductManager;
        $resolver->setDefaults([
            'data_class' => PackProductInterface::class,
            'empty_data' => function (FormInterface $form) use ($packProductManager) {
                return $packProductManager->createEntity();
            },
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('product', EntityType::class, [
            'required' => false,
            'class' => ProductInterface::class,
            'em' => $this->em,
            'choice_label' => function (ProductInterface $product) {
                return $product->getName();
            },
        ]);

        $builder->add('quantity');
    }
}
