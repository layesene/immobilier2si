<?php
/**
 * Created by PhpStorm.
 * User: SENE
 * Date: 31/01/2018
 * Time: 12:52
 */
namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;

class ImageRepository extends EntityRepository{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Product p ORDER BY p.name ASC'
            )
            ->getResult();
    }
}