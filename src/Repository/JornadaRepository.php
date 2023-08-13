<?php

namespace App\Repository;

use App\Entity\Jornada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jornada|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jornada|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jornada[]    findAll()
 * @method Jornada[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JornadaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jornada::class);
    }

    public function findByUsuarioOrdered($id)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.usuario_id = :val')
            ->setParameter('val', $id)
            ->orderBy('j.hora', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    // /**
    //  * @return Jornada[] Returns an array of Jornada objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jornada
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
