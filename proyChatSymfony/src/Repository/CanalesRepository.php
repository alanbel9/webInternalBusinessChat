<?php

namespace App\Repository;

use App\Entity\Canales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class CanalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Canales::class);
    }
    
    public function leerCanalesSuscrito(){
        $entityManager = $this->getEntityManager();
        $idUsuario = 1;   //  $_SESSION['idUsuario']
        $queryMenu = $entityManager->createQuery('
                        SELECT n.nombre , n.idCanal 
                        FROM App\Entity\Canales n 
                        WHERE n.idCanal IN 
                            ( SELECT c2.idCanal 
                                FROM App\Entity\UC uc join uc.canal c2 
                                WHERE uc.idUs = :idUsuario )    
                                ORDER BY n.idCanal DESC
                            ')->setParameter("idUsuario",$idUsuario);
        return $queryMenu->execute();
    }

    public function leerCanalesOrdenado(){
        $entityManager = $this->getEntityManager();
        $idUsuario = 1;   //  $_SESSION['idUsuario']
        $queryMenu = $entityManager->createQuery('
                        SELECT n.nombre, n.idCanal 
                        FROM App\Entity\Canales n
                        WHERE n.idCanal NOT IN 
                            ( SELECT c2.idCanal 
                                FROM App\Entity\UC uc join uc.canal c2 
                                WHERE uc.idUs = :idUsuario ) 
                                ORDER BY n.idCanal DESC
                            ')->setParameter("idUsuario",$idUsuario);   
                            // NOT IN  para leer solo los grupos NO suscritos.
        return $queryMenu->execute();
    }

    public function leerInfoCanales(){
        $entityManager = $this->getEntityManager();
        $queryMenu = $entityManager->createQuery('
                        SELECT n FROM App\Entity\Canales n
                        ORDER BY n.idCanal DESC
                    ');
        return $queryMenu->execute();
    }
    
   
}
