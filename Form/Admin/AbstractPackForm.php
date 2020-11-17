<?php

namespace Softspring\CatalogBundle\Form\Admin;

use Doctrine\ORM\EntityManagerInterface;
use Softspring\CatalogBundle\Manager\PackManagerInterface;
use Softspring\CatalogBundle\Model\PackInterface;
use Softspring\DoctrineSimpleTranslationTypeBundle\Form\SimpleTranslationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractPackForm extends AbstractType
{
    /**
     * @var PackManagerInterface
     */
    protected $packManager;

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * AbstractPackForm constructor.
     */
    public function __construct(PackManagerInterface $packManager, EntityManagerInterface $em)
    {
        $this->packManager = $packManager;
        $this->em = $em;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PackInterface::class,
            'translation_domain' => 'sfs_catalog',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($this->packManager->getEntityClassReflection()->hasProperty('translatedName')) {
            $builder->add('translatedName', SimpleTranslationType::class);
        } else {
            $builder->add('name');
        }

        $builder->add('packProducts', PackProductCollectionType::class, [
            'entry_options' => [
                'label_format' => str_ireplace('%name%', 'packProducts.%name%', $options['label_format']),
            ],
        ]);
    }
}
