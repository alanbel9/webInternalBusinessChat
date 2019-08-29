<?php

namespace App\Repository;

use App\Entity\Usuarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


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
            SELECT n FROM App\Entity\Usuarios n
            WHERE n.idUs = :id
            ')->setParameter("id",$id); 
            $obj= $queryUsuarios->getSingleResult();
             return $obj;
    }

    public function leerPerfilUsuarioSession(){
        $id = 1;   // $_SESSION['idUsuario'];  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        $entityManager = $this->getEntityManager();
        $queryUsuarios = $entityManager->createQuery('
        SELECT n FROM App\Entity\Usuarios n
        WHERE n.idUs = :id
        ')->setParameter("id",$id); 
        $obj= $queryUsuarios->getSingleResult();
         return $obj;
    }



}
