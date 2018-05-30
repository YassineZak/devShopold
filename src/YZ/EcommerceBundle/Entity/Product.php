<?php

namespace YZ\EcommerceBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="YZ\EcommerceBundle\Repository\ProductRepository")
 * @Vich\Uploadable
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="text", nullable=true)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="string")
     */
    private $reference;

    /**
     * @ORM\ManyToOne(targetEntity="YZ\EcommerceBundle\Entity\Category")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit", type="string", length=255)
     */
    private $imageProduit;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imageProduit")
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit2", type="string", length=255, nullable=true)
     */
    private $imageProduit2;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imageProduit2")
     * @var File
     */
    private $imageFile2;
    /**
     * @var string
     *
     * @ORM\Column(name="image_produit3", type="string", length=255, nullable=true)
     */
    private $imageProduit3;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imageProduit3")
     * @var File
     */
    private $imageFile3;
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre.
     *
     * @param string $titre
     *
     * @return Product
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resume.
     *
     * @param string|null $resume
     *
     * @return Product
     */
    public function setResume($resume = null)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume.
     *
     * @return string|null
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix.
     *
     * @param int $prix
     *
     * @return Product
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    public function __construct()

  {

    // Par défaut, la date de l'annonce est la date d'aujourd'hui

    $this->dateCreation = new \Datetime();

  }

    /**
     * Set dateCreation.
     *
     * @param \DateTime $dateCreation
     *
     * @return Product
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation.
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set stock.
     *
     * @param int|null $stock
     *
     * @return Product
     */
    public function setStock($stock = null)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock.
     *
     * @return int|null
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set reference.
     *
     * @param int $reference
     *
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference.
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set imageProduit.
     *
     * @param string $imageProduit
     *
     * @return Product
     */
    public function setImageProduit($imageProduit)
    {
        $this->imageProduit = $imageProduit;

        return $this;
    }

    /**
     * Get imageProduit.
     *
     * @return string
     */
    public function getImageProduit()
    {
        return $this->imageProduit;
    }

    public function setImageFile(File $imageProduit = null)
    {
        $this->imageFile = $imageProduit;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageProduit) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->dateCreation = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }


    /**
     * Set imageProduit2.
     *
     * @param string $imageProduit2
     *
     * @return Product
     */
    public function setImageProduit2($imageProduit2)
    {
        $this->imageProduit2 = $imageProduit2;

        return $this;
    }

    /**
     * Get imageProduit2.
     *
     * @return string
     */
    public function getImageProduit2()
    {
        return $this->imageProduit2;
    }

    public function setImageFile2(File $imageProduit2 = null)
    {
        $this->imageFile2 = $imageProduit2;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageProduit2) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->dateCreation = new \DateTime('now');
        }
    }

    public function getImageFile2()
    {
        return $this->imageFile2;
    }


    /**
     * Set imageProduit3.
     *
     * @param string $imageProduit3
     *
     * @return Product
     */
    public function setImageProduit3($imageProduit3)
    {
        $this->imageProduit3 = $imageProduit3;

        return $this;
    }

    /**
     * Get imageProduit.
     *
     * @return string
     */
    public function getImageProduit3()
    {
        return $this->imageProduit3;
    }

    public function setImageFile3(File $imageProduit3 = null)
    {
        $this->imageFile3 = $imageProduit3;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageProduit3) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->dateCreation = new \DateTime('now');
        }
    }

    public function getImageFile3()
    {
        return $this->imageFile3;
    }



    /**
     * Set category.
     *
     * @param \YZ\EcommerceBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\YZ\EcommerceBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \YZ\EcommerceBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * toString
     * @return string
     */
    public function __toString()
    {
            return (string) $this->getCategory();
    }
}
