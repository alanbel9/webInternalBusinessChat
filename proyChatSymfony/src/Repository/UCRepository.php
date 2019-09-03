<?php

namespace App\Repository;

use App\Entity\UC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class UCRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UC::class);
    }


    public function borrarGrupo(int $idGrupo, int $idUsuario){
        $entityManager = $this->getEntityManager();
        $queryUsuarios = $entityManager->createQuery('
            DELETE FROM App\Entity\UC n
            WHERE n.idUs = :id and n.canal = :grupo
        ')->setParameters(array(
            'id' => $idUsuario,   //  $_SESSION['idUsuario']
            'grupo' => $idGrupo
        )); 
        $queryUsuarios->execute();
    }






    /*
    public function gruposUsuario(int $id){
        $entityManager = $this->getEntityManager();
        $queryUsuarios = $entityManager->createQuery('
        SELECT n FROM App\Entity\UC n
        WHERE n.IdUs = :id
        ')->setParameter("id",$id); 
        $obj= $queryUsuarios->execute();
         return $obj;
    }
*/

}
