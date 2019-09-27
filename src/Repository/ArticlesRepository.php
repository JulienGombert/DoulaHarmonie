<?php

namespace App\Repository;

use App\Entity\Articles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Articles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Articles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Articles[]    findAll()
 * @method Articles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticlesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Articles::class);
    }


    public function getTheLastThreeArticles()
    {
        $qb = $this->createQueryBuilder('a');

        $query = $qb
            ->select('a')
            ->andWhere('a.published = 1')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery();

        $resultat = $query->getArrayResult();

        return $resultat;
    }


    public function getAllArticles()
    {
        $qb = $this->createQueryBuilder('a');

        $query = $qb
            ->select('a')
            ->andWhere('a.published = 1')
            ->orderBy('a.id', 'DESC')
            ->getQuery();

        $resultat = $query->getArrayResult();

        return $resultat;
    }



    // /**
    //  * @return Articles[] Returns an array of Articles objects
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
    public function findOneBySomeField($value): ?Articles
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
