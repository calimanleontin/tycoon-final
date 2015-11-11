<?php

namespace Tycoon\AccessBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class RegisterType
 * @package Tycoon\AccessBundle\Form
 */
class RegisterType extends AbstractType
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
                'password',
                'repeated',
                array(
                    'type' => 'password',
                    'invalid_message' => 'The password fields must match.',
                    'required' => true,
                    'first_options' => array(
                        'label' => 'Password:',
                        'attr' => array(
                            'class' => 'form-control'
                        )
                    ),
                    'second_options' => array(
                        'label' => 'Confirm Password:',
                        'attr' => array(
                            'class' => 'form-control'
                        )
                    ),
                )
            )
            ->add(
                'email',
                'email',
                array(
                    'label' => 'E-mail:',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                )
            );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tycoon_access_register_form';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Tycoon\AccessBundle\Entity\User'
            )
        );
    }
}
