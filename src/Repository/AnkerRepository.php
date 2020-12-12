<?php

namespace App\Repository;

use App\Entity\Anker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Anker|null find($id, $lockMode = null, $lockVersion = null)
 * @method Anker|null findOneBy(array $criteria, array $orderBy = null)
 * @method Anker[]    findAll()
 * @method Anker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnkerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Anker::class);
    }

    // /**
    //  * @return Anker[] Returns an array of Anker objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Anker
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
