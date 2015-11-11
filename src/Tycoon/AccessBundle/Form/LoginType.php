<?php

namespace Tycoon\AccessBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class LoginType
 * @package Tycoon\AccessBundle\Form
 */
class LoginType extends AbstractType
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
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Username',
                        'class' => 'form-control'
                    )
                )
            )
            ->add(
                'password',
                'password',
                array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Password',
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
        return 'tycoon_access_login_form';
    }
}
