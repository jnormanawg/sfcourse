<?php

namespace App\Repository;

use App\Entity\TEPSITE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TEPSITE|null find($id, $lockMode = null, $lockVersion = null)
 * @method TEPSITE|null findOneBy(array $criteria, array $orderBy = null)
 * @method TEPSITE[]    findAll()
 * @method TEPSITE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TEPSITERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TEPSITE::class);
    }

    // /**
    //  * @return TEPSITE[] Returns an array of TEPSITE objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TEPSITE
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
