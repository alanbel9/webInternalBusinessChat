<?php

namespace App\Repository;

use App\Entity\UC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UC|null find($id, $lockMode = null, $lockVersion = null)
 * @method UC|null findOneBy(array $criteria, array $orderBy = null)
 * @method UC[]    findAll()
 * @method UC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UCRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UC::class);
    }


    public function gruposUsuario(int $id){
        $entityManager = $this->getEntityManager();
        $queryUsuarios = $entityManager->createQuery('
        SELECT n FROM App\Entity\UC n
        WHERE n.IdUs = :id
        ')->setParameter("id",$id); 
        $obj= $queryUsuarios->execute();
         return $obj;
    }

    public function borrarGrupo(int $idGrupo){
        $entityManager = $this->getEntityManager();
        $queryUsuarios = $entityManager->createQuery('
            DELETE FROM App\Entity\UC n
            WHERE n.idUs = :id and n.canal = :grupo
        ')->setParameters(array(
            'id' => 2,
            'grupo' => $idGrupo
        )); 
        $queryUsuarios->execute();
    }
    
    // /**
    //  * @return UC[] Returns an array of UC objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UC
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
