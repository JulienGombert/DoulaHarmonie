<?php

namespace App\Repository;

use App\Entity\News;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method News|null find($id, $lockMode = null, $lockVersion = null)
 * @method News|null findOneBy(array $criteria, array $orderBy = null)
 * @method News[]    findAll()
 * @method News[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, News::class);
    }


    public function getTheLastThreeNews()
    {
        $qb = $this->createQueryBuilder('n');

        $query = $qb
            ->select('n')
            ->andWhere('n.published = 1')
            ->orderBy('n.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery();

        $resultat = $query->getArrayResult();

        return $resultat;
    }


    public function getAllNews()
    {
        $qb = $this->createQueryBuilder('n');

        $query = $qb
            ->select('n')
            ->andWhere('n.published = 1')
            ->orderBy('n.id', 'DESC')
            ->getQuery();

        $resultat = $query->getArrayResult();

        return $resultat;
    }

    // /**
    //  * @return News[] Returns an array of News objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?News
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
