<?php

namespace Tycoon\CatalogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass="Tycoon\CatalogBundle\Repository\ProductRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")]
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Tycoon\OrderBundle\Entity\Item", mappedBy="product")
     */
    protected $item;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $price;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     */
    protected $stock;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sold;

    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="products")
     */
    protected $categories;

    /**
     * @ORM\OneToMany(targetEntity="Attribute", mappedBy="product")
     */
    protected $attributes;

    /** @var  string */
    protected $type;

    /**
     * @var string $path
     * @ORM\Column(type="string", length=255, nullable=true,)
     */
    protected $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    // SETTERS AND GETTERS

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return int
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @param int $sold
     */
    public function setSold($sold)
    {
        $this->sold = $sold;
    }

    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return ArrayCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ArrayCollection $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return ArrayCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param ArrayCollection $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @param Category $category
     * @return Product $this
     */
    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
        $category->addProduct($this);

        return $this;
    }

    /**
     * @param Category $category
     */
    public function removeCategory(Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * @param Attribute $attribute
     * @return Product $this
     */
    public function addAttribute(Attribute $attribute)
    {
        $this->attributes[] = $attribute;
        $attribute->setProduct($this);

        return $this;
    }

    /**
     * @param Attribute $attribute
     */
    public function removeAttribute(Attribute $attribute)
    {
        $this->attributes->removeElement($attribute);
    }

    /**
     * @return null|string
     */
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    /**
     * @return null|string
     */
    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir() . '/' . $this->path;
    }

    /**
     * @return string
     */
    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    /**
     * @return string
     */
    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'images';
    }

    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file

        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    public function __construct()
    {
        $this->sold = 0;
        $this->categories = new ArrayCollection();
        $this->attributes = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function className()
    {
        return 'Consumable';
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
                        'min' => 4,
                        'max' => 25,
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

        //              =====> VALIDATOR FOR PRICE <=====

        $metadata->addPropertyConstraints(
            'price',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the price for the product.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 1,
                        'max' => 5,
                        'minMessage' => 'The product price must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The product price cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\d]/',
                        'match' => false,
                        'message' => 'The product price must contain only numeric characters.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR DESCRIPTION <=====

        $metadata->addPropertyConstraints(
            'description',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the product description.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 10,
                        'max' => 100,
                        'minMessage' => 'The product description must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The product description cannot be longer than {{ limit }} characters.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR STOCK <=====

        $metadata->addPropertyConstraints(
            'stock',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the stock for the product.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 1,
                        'max' => 6,
                        'minMessage' => 'The product stock must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The product stock cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\d]/',
                        'match' => false,
                        'message' => 'The product stock must contain only numeric characters.',
                    )
                )
            )
        );
    }
}
