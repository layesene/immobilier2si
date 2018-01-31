<?php
/**
 * Created by PhpStorm.
 * User: SENE
 * Date: 14/01/2018
 * Time: 08:35
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Image;
use AppBundle\Entity\TypeHabitat;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table()
 * @ORM\Entity
 */
class Habitat
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @var string $adress
     *
     * @ORM\Column(name="adress", type="string")
     */
    private $adress;

    /**
     * @var string $phonenumber
     *
     * @ORM\Column(name="phonenumber", type="string")
     */
    private $phonenumber;
    
    /**
     * @var float $surface
     *
     * @ORM\Column(name="surface", type="float")
     */
    private $surface;

    /**
     * @var float $prix
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var float $nbPiece
     *
     * @ORM\Column(name="nb_piece", type="integer")
     */
    private $nbPiece;

    /**
     * @var Image[]
     * @ORM\ManyToMany(targetEntity="Image", mappedBy="images")
     * @ORM\JoinTable(name="habitat_has_image")
     * 
     */
     protected $photos;

    /**
     * @ORM\ManyToOne(targetEntity="TypeHabitat")
     * @ORM\JoinColumn(name="type_habitat_id", referencedColumnName="id")
     */
    public $typeHabitat;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }
    
    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * @param string $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }

    /**
     * @return float
     */
    public function getNbPiece()
    {
        return $this->nbPiece;
    }

    /**
     * @param float $nbPiece
     */
    public function setNbPiece($nbPiece)
    {
        $this->nbPiece = $nbPiece;
    }

    /**
     * @return float
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param float $surface
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * Add image
     *
     * @param Image $image
     *
     * @return Image
     */
    public function addPhotos(Image $photos)
    {
        $this->photos->add($photos);

        return $this;
    }

    /**
     * Remove photo
     *
     * @param Image $photo
     */
    public function removePhotos(Image $photo)
    {
        $this->photos->removeElement($photo);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos()
    {
        return $this->photos;
    }
    
    
}