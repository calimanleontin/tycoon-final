<?php

namespace Tycoon\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass="Tycoon\CatalogBundle\Repository\AttributeRepository")
 */
class Attribute
{
    const STAT1 = 'Agility';

    const STAT2 = 'Intelligence';

    const STAT3 = 'Stamina';

    const STAT4 = 'Strength';

    const STAT5 = 'Grappling';

    const STAT6 = 'Kicking';

    const STAT7 = 'Striking';

    const STAT8 = 'Takedown';

    const STAT9 = 'Validity-Days';

    const STAT10 = 'Validity-Hours';

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="attributes")
     */
    protected $product;

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */

    protected $value;

    /**
     * @ORM\Column(type="string")
     */
    protected $unitOfMeasurement;

    // SETTERS AND GETTERS

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * @param string $unitOfMeasurement
     */
    public function setUnitOfMeasurement($unitOfMeasurement)
    {
        $this->unitOfMeasurement = $unitOfMeasurement;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        //              =====> VALIDATOR FOR NAME <=====

        $metadata->addPropertyConstraints(
            'name',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the product name.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 3,
                        'max' => 15,
                        'minMessage' => 'The product name must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The product name cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\w\d\s-\']/',
                        'match' => false,
                        'message' => 'The product name must contain only alphanumeric characters, dashes and spaces.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR VALUE <=====

        $metadata->addPropertyConstraints(
            'value',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the value for the attribute.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 1,
                        'max' => 5,
                        'minMessage' => 'The attribute value must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The attribute value cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\d]/',
                        'match' => false,
                        'message' => 'The attribute value must contain only numeric characters.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR UNIT OF MEASUREMENT <=====

        $metadata->addPropertyConstraints(
            'unitOfMeasurement',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the attribute unitOfMeasurement.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 3,
                        'max' => 15,
                        'minMessage' => 'The attribute unitOfMeasurement must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The attribute unitOfMeasurement cannot be longer than {{ limit }} characters.',
                    )
                )
            )
        );
    }

    public function __construct()
    {
        $this->unitOfMeasurement = 'points';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'attribute';
    }
}
