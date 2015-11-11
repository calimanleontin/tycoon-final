<?php

namespace Tycoon\AccessBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class RegisterType
 * @package Tycoon\AccessBundle\Form
 */
class ProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'firstName',
                'text',
                array(
                    'label' => 'First Name:',
                    'attr' => array(
                        'class' => "form-control",
                        'placeholder' => "First Name"
                    )
                )
            )
            ->add(
                'lastName',
                'text',
                array(
                    'label' => 'Last Name:',
                    'attr' => array(
                        'class' => "form-control",
                        'placeholder' => "Last Name"
                    )

                )
            )
            ->add(
                'email',
                'email',
                array(
                    'label' => 'E-mail:',
                    'attr' => array(
                        'class' => "form-control",
                        'placeholder' => "Email"
                    )
                )
            );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tycoon_access_profile_form';
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
