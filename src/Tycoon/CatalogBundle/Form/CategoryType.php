<?php

namespace Tycoon\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CategoryType
 * @package Tycoon\CatalogBundle\Form
 */
class CategoryType extends AbstractType
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
                'description',
                'textarea',
                array(
                    'label' => "Description:",
                    'attr' => array(
                        'class' => 'form-control tycoon-textarea'
                    )
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
                'data_class' => 'Tycoon\CatalogBundle\Entity\Category'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'catalog_category_form';
    }
}
