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
            'id' => $idUsuario,
            'grupo' => $idGrupo
        )); 
        $queryUsuarios->execute();
    }
}