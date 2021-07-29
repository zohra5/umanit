<?php

namespace App\Repository;

use App\Entity\EvaluationObjectifs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EvaluationObjectifs|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvaluationObjectifs|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvaluationObjectifs[]    findAll()
 * @method EvaluationObjectifs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvaluationObjectifsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvaluationObjectifs::class);
    }

    // /**
    //  * @return EvaluationObjectifs[] Returns an array of EvaluationObjectifs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EvaluationObjectifs
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
