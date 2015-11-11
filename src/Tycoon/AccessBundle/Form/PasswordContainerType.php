<?php

namespace Tycoon\AccessBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class RegisterType
 * @package Tycoon\AccessBundle\Form
 */
class PasswordContainerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'oldPassword',
                'password',
                array(
                    'label' => 'Old password:',
                    'attr' => array(
                        'class' => "form-control",
                        'placeholder' => "Old Password"
                    )
                )
            )
            ->add(
                'newPassword',
                'repeated',
                array(
                    'type' => 'password',
                    'invalid_message' => 'The password fields must match.',
                    'required' => true,
                    'first_options' => array(
                        'label' => 'New password:',
                        'attr' => array(
                            'class' => "form-control",
                            'placeholder' => "New Password"
                        )
                    ),
                    'second_options' => array(
                        'label' => 'Confirm new password:',
                        'attr' => array(
                            'class' => "form-control",
                            'placeholder' => "Confirm Password"
                        )
                    )
                )
            );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tycoon_access_new_pass_form';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
            'data_class' => 'Tycoon\AccessBundle\Entity\PasswordContainer'
            )
        );
    }
}
