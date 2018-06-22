<?php
// src/YZ/UserBundle/Entity/User.php

namespace YZ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="YZ_user")
 * @ORM\Entity(repositoryClass="YZ\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Veuillez saisir votre nom.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=20,
     *     minMessage="Votre nom doit contenir plus de 3 caractères.",
     *     maxMessage="Votre nom ne doit pas contenir plus de 20 caractéres.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nom;

    /**
       * @ORM\Column(type="string", length=255)
       *
       * @Assert\NotBlank(message="Veuillez saisir votre prénom.", groups={"Registration", "Profile"})
       * @Assert\Length(
       *     min=3,
       *     max=20,
       *     minMessage="Votre nom doit contenir plus de 3 caractères.",
       *     maxMessage="Votre nom ne doit pas contenir plus de 20 caractéres.",
       *     groups={"Registration", "Profile"}
       * )
       */
      protected $prenom;


      /**
         * @ORM\Column(type="string")
         *
         * @Assert\NotBlank(message="Veuillez saisir votre ville.", groups={"Registration", "Profile"})
         */
        protected $ville;

        /**
           * @ORM\Column(type="string")
           *
           * @Assert\NotBlank(message="Veuillez saisir votre code postal.", groups={"Registration", "Profile"})
           */
          protected $codePostal;

        /**
           * @ORM\Column(type="string")
           *
           * @Assert\NotBlank(message="Veuillez saisir votre adresse.", groups={"Registration", "Profile"})
           */
          protected $adresse;


        /**
           * @ORM\Column(type="integer")
           *
           * @Assert\NotBlank(message="Veuillez saisir votre adresse.", groups={"Registration", "Profile"})
           * @Assert\Type(
           * type="integer",
           * message="Veuillez saisir un numéro de téléphone")
           */
          protected $telephone;



    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getFullName(){
      return trim($this->getNom(). ' '.$this->getPrenom());
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone.
     *
     * @param int $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal.
     *
     * @param string $codePostal
     *
     * @return User
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
}
