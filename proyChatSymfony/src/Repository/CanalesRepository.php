<?php

namespace App\Repository;

use App\Entity\Canales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Canales|null find($id, $lockMode = null, $lockVersion = null)
 * @method Canales|null findOneBy(array $criteria, array $orderBy = null)
 * @method Canales[]    findAll()
 * @method Canales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CanalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Canales::class);
    }
    
    public function leerCanalesOrdenado(){
        $entityManager = $this->getEntityManager();
        $queryMenu = $entityManager->createQuery('
                        SELECT n.nombre FROM App\Entity\Canales n
                        ORDER BY n.idCanal DESC
                    ');
        //$queryMenu = $entityManager->createQuery('
        //               SELECT n FROM App\Entity\Canales n
        //                ORDER BY n.idCanal DESC
        //            ');
        return $queryMenu->execute();
    }


    // /**
    //  * @return Canales[] Returns an array of Canales objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Canales
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
