<?php
/**
 * Created by PhpStorm.
 * User: SENE
 * Date: 01/01/2018
 * Time: 15:47
 */
// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    

    public function __construct()
    {
        parent:: __construct();
    }
}