<?php

namespace App\Repository;

use App\Entity\Oferta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Oferta|null find($id, $lockMode = null, $lockVersion = null)
 * @method Oferta|null findOneBy(array $criteria, array $orderBy = null)
 * @method Oferta[]    findAll()
 * @method Oferta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfertaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Oferta::class);
    }

    // /**
    //  * @return Oferta[] Returns an array of Oferta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Oferta
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findAllWithEmpresa(): array
    {
        /*
            'SELECT o.id, o.titol, o.descripcio, o.data_pub, e.nom AS empresa 
            FROM App\Entity\Oferta o LEFT JOIN App\Entity\Empresa e WITH o.empresa = e.id
            '
        */
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT o.id, o.titol, o.descripcio, o.dataPub, e.nom AS empresa 
            FROM App\Entity\Oferta o LEFT JOIN App\Entity\Empresa e WITH o.empresa = e.id'
        );

        return $query->getResult();
    }

}
