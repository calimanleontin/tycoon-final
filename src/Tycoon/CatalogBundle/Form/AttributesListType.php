<?php

namespace Tycoon\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * Class AttributesListType
 * @package Tycoon\CatalogBundle\Form
 */
class AttributesListType extends AbstractType
{
    /** @var array $atributes */
    protected $attributes;

    /** @var array $values */
    protected $values;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var string $attribute */
        foreach ($this->attributes as $attribute) {
            /** @var string $minValue */
            $minValue = isset($this->values["min{$attribute}"]) ? $this->values["min{$attribute}"] : '';

            /** @var string $maxValue */
            $maxValue = isset($this->values["max{$attribute}"]) ? $this->values["max{$attribute}"] : '';

            $builder
                ->add(
                    "min{$attribute}",
                    'text',
                    array(
                        'label' => false,
                        'required' => false,
                        'attr' => array(
                            'value' => $minValue,
                            'placeholder' => "Min",
                            'pattern' => '\d{1,8}',
                            'class' => "attribute-filter-input"
                        )
                    )
                )
                ->add(
                    "max{$attribute}",
                    'text',
                    array(
                        'label' => false,
                        'required' => false,
                        'attr' => array(
                            'value' => $maxValue,
                            'placeholder' => "Max",
                            'pattern' => '\d{1,8}',
                            'class' => "attribute-filter-input"
                        )
                    )
                );
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }

    /**
     * @param array $attributesNames
     */
    public function __construct($attributesNames, $attributeValues = null)
    {
        $this->attributes = $attributesNames;
        $this->values = $attributeValues;
    }
}
