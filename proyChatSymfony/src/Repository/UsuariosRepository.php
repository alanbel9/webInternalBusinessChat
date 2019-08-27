<?php

namespace App\Repository;

use App\Entity\Usuarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Usuarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usuarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usuarios[]    findAll()
 * @method Usuarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuariosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usuarios::class);
    }


    public function leerUsuarios(string $param){
        $entityManager = $this->getEntityManager();
        $queryUsuarios = $entityManager->createQuery('
        SELECT n FROM App\Entity\Usuarios n
        WHERE n.nombre LIKE :param
        ')->setParameter("param", '%' . $param. '%'); 
        $obj= $queryUsuarios->execute();
        return $obj;
        }


    public function leerPerfilUsuario(int $id){
            $entityManager = $this->getEntityManager();
            $queryUsuarios = $entityManager->createQuery('
            SELECT n FROM App\Entity\Usuarios n WHERE n.idUs = :id '
            )->setParameter("id",$id); 
            $obj= $queryUsuarios->execute();
             return $obj;
    }

    // /**
    //  * @return Usuarios[] Returns an array of Usuarios objects
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
    public function findOneBySomeField($value): ?Usuarios
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
