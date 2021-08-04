<?php

namespace App\Repository;

use App\Entity\FormulaireProgression;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormulaireProgression|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormulaireProgression|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormulaireProgression[]    findAll()
 * @method FormulaireProgression[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormulaireProgressionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormulaireProgression::class);
    }

    public function persist($formulaireProgression){
        $this->_em->persist($formulaireProgression);
    }


    
    // /**
    //  * @return FormulaireProgression[] Returns an array of FormulaireProgression objects
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
    public function findOneBySomeField($value): ?FormulaireProgression
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
