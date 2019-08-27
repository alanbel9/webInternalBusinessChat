<?php

namespace App\Repository;

use App\Entity\Conversa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Conversa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conversa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conversa[]    findAll()
 * @method Conversa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConversaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conversa::class);
    }


    public function leerMensajesGrupo( int $idgrupo){
        $entityManager = $this->getEntityManager();
        $queryMenu = $entityManager->createQuery('
                        SELECT n.mensaje , u.nombre , n.fecha 
                        FROM App\Entity\Conversa n JOIN n.usuario u  
                        WHERE n.idCanal = :idgrupo
                        ORDER BY n.fecha 
                    ') ->setParameter('idgrupo' , $idgrupo);   
        
        return $queryMenu->execute();
    }


    // /**
    //  * @return Conversa[] Returns an array of Conversa objects
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
    public function findOneBySomeField($value): ?Conversa
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
