<?php

namespace App\Repository;

use App\Entity\NewToImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NewToImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewToImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewToImage[]    findAll()
 * @method NewToImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewToImageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NewToImage::class);
    }

    // /**
    //  * @return NewToImage[] Returns an array of NewToImage objects
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
    public function findOneBySomeField($value): ?NewToImage
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
