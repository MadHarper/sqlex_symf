<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Pc;

class PcRepository extends EntityRepository
{


    public function findAllByPriceLow($price)
    {
        return $this->createQueryBuilder('pc')
            ->andWhere('pc.price < :price')
            ->setParameter('price', $price)
            ->getQuery()
            ->execute();
    }


    public function findAllOrdered()
    {
        $dql = 'SELECT pc FROM AppBundle\Entity\Pc pc ORDER BY pc.price';
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }


    public function findVarDump()
    {
        $dql = 'SELECT pc FROM AppBundle\Entity\Pc pc ORDER BY pc.price';
        $query = $this->getEntityManager()->createQuery($dql);
        var_dump($query->getSQL());
        die;
    }
}