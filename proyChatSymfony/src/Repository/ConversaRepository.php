<?php

namespace App\Repository;

use App\Entity\Conversa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class ConversaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conversa::class);
    }


    //   PRUEBAS SACAR ID USUARIO  !!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  /*  public function leerMensajesGrupo( int $idgrupo){
        $entityManager = $this->getEntityManager();
        $queryMenu = $entityManager->createQuery('
                        SELECT n.mensaje , u.nombre , n.fecha 
                        FROM App\Entity\Conversa n JOIN n.usuario u  
                        WHERE n.idCanal = :idgrupo
                        ORDER BY n.id DESC
                    ') ->setParameter('idgrupo' , $idgrupo);   
        
        return $queryMenu->execute();
    }
    */
    public function leerMensajesGrupo( int $idgrupo){
        $entityManager = $this->getEntityManager();
        $queryMenu = $entityManager->createQuery('
                        SELECT n.mensaje , u.nombre , n.fecha , u.idUs
                        FROM App\Entity\Conversa n JOIN n.usuario u  
                        WHERE n.idCanal = :idgrupo
                        ORDER BY n.id DESC
                    ') ->setParameter('idgrupo' , $idgrupo);   
        
        return $queryMenu->execute();
    }

}
