<?php

namespace Tycoon\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ProductType
 * @package Tycoon\CatalogBundle\Form
 */
class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                'text',
                array(
                    'label' => "Name:",
                    'attr' => array(
                        'class' => 'form-control'
                    )
                )
            )
            ->add(
                'price',
                'text',
                array(
                    'label' => "Price:",
                    'attr' => array(
                        'class' => 'form-control'
                    )
                )
            )
            ->add(
                'description',
                'textarea',
                array(
                    'label' => "Description:",
                    'attr' => array(
                        'class' => 'form-control tycoon-textarea'
                    )
                )
            )
            ->add(
                'file',
                'file',
                array(
                    'required' => false,
                    'label' => "Name:",
                    'attr' => array(
                        'class' => 'form-control'
                    )
                )
            )
            ->add(
                'stock',
                'text',
                array(
                    'label' => "Stock:",
                    'attr' => array(
                        'class' => 'form-control'
                    )
                )
            )
            ->add(
                'categories',
                'entity',
                array(
                    'label' => 'Categories',
                    'class' => 'TycoonCatalogBundle:Category',
                    'multiple' => true,
                    'expanded' => true,
                    'attr' => array(
                        'class' => 'tycoon-checkbox'
                    )
                )
            )
            ->add(
                'attributes',
                'collection',
                array(
                    'type' => new AttributeType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                )
            );
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Tycoon\CatalogBundle\Entity\Product'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'catalog_product_form';
    }
}
