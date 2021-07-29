<?php

namespace App\Repository;

use App\Entity\FormationsSouhaitees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormationsSouhaitees|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormationsSouhaitees|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormationsSouhaitees[]    findAll()
 * @method FormationsSouhaitees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationsSouhaiteesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationsSouhaitees::class);
    }

    // /**
    //  * @return FormationsSouhaitees[] Returns an array of FormationsSouhaitees objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormationsSouhaitees
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
