<?php

namespace Tycoon\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Collection;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                'text',
                array(
                    'attr' => array(
                        'placeholder' => 'What\'s your name?',
                        'pattern'     => '.{2,}', //minlength
                        'class'         => 'form-control'
                    )
                )
            )
            ->add(
                'email',
                'email',
                array(
                    'attr' => array(
                        'placeholder' => 'So I can get back to you.',
                        'class'         => 'form-control'
                    )
                )
            )
            ->add(
                'subject',
                'text',
                array(
                    'attr' => array(
                        'placeholder' => 'The subject of your message.',
                        'pattern'     => '.{3,}', //minlength
                        'class'         => 'form-control'
                    )
                )
            )
            ->add(
                'message',
                'textarea',
                array(
                    'attr' => array(
                        'cols' => 90,
                        'rows' => 10,
                        'placeholder' => 'And your message to us...',
                        'class'         => 'form-control tycoon-textarea'
                    )
                )
            );
    }

    public function defaultOptions(OptionsResolver $resolver)
    {
        /** @var Collection $collectionConstraint
         * @Assert\NotBlank()
         */
        $collectionConstraint = new Collection(
            array(
                'name' => array(
                    (array('message' => 'Name should not be blank.')),
                    (array('min' => 2))
                ),
                'email' => array(
                    (array('message' => 'Email should not be blank.')),
                    (array('message' => 'Invalid email address.'))
                ),
                'subject' => array(
                    (array('message' => 'Subject should not be blank.')),
                    (array('min' => 3))
                ),
                'message' => array(
                    (array('message' => 'Message should not be blank.')),
                    (array('min' => 5))
                )
            )
        );

        $resolver->setDefaults(
            array(
                'constraints' => $collectionConstraint
            )
        );
    }

    public function getName()
    {
        return 'catalog_contact_form';
    }
}
