<?php

namespace App\Repository;

use App\Entity\BilanCompetences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BilanCompetences|null find($id, $lockMode = null, $lockVersion = null)
 * @method BilanCompetences|null findOneBy(array $criteria, array $orderBy = null)
 * @method BilanCompetences[]    findAll()
 * @method BilanCompetences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BilanCompetencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BilanCompetences::class);
    }

    // /**
    //  * @return BilanCompetences[] Returns an array of BilanCompetences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BilanCompetences
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
