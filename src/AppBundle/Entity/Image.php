<?php
/**
 * Created by PhpStorm.
 * User: SENE
 * Date: 14/01/2018
 * Time: 00:32
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Habitat;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Image
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
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var File
     * * @Assert\File(
     *     maxSize = "10M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png", "image/tiff"},
     *     maxSizeMessage = "La taille de fichier maximale autorisée est de 10 Mo.",
     *     mimeTypesMessage = "Seule les fichiers de type image sont autorisés."
     * )
     * @ORM\Column(name="emplacement")
     */
    private $emplacement;

    /**
     * @var Habitat[]
     * @ORM\ManyToMany(targetEntity="Habitat", inversedBy="habitat", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="habitat_has_image")
     */
    private $habitats;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Set emplacement
     *
     * @param file $emplacement
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;
    }

    /**
     * Get emplacement
     *
     * @return file
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * @return Habitat[]
     */
    public function getHabitats()
    {
        return $this->habitats;
    }

    /**
     * @param Habitat[] $habitats
     */
    public function setHabitats($habitats)
    {
        $this->habitats = $habitats;
    }
    
}