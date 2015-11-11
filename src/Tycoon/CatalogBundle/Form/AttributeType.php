<?php

namespace Tycoon\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class AttributeType
 * @package Tycoon\CatalogBundle\Form
 */
class AttributeType extends AbstractType
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
                    'label' => 'Name:',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                )
            )
            ->add(
                'value',
                'text',
                array(
                    'label' => 'Value:',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                )
            )
            ->add(
                'unit_of_measurement',
                'choice',
                array(
                    'label' => 'Unit of measurement:',
                    'choices' => array(
                        'points' => 'points',
                        'points-decaying' => 'points-decaying'
                    ),
                    'preferred_choices' => array(
                        'points',
                        'points-decaying'
                    ),
                    'attr' => array(
                        'class' => 'form-control'
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
                'data_class' => 'Tycoon\CatalogBundle\Entity\Attribute'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'catalog_attribute_form';
    }
}
