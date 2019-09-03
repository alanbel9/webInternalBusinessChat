<?php

namespace App\Controller;

use DateTime;
use App\Entity\Canales;
use App\Entity\Conversa;
use App\Entity\Usuarios;
use App\Repository\CanalesRepository;
use App\Repository\UsuariosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    /**
     * @Route("/principal")
     */
class PrincipalController extends AbstractController
{
    /**
     * @Route("/", name="principal")
     */
    public function index()
    {
        //  si no está logeado que lleve al login.   LO COMENTO PARA Q NO DE POR CULO EN CASA
        $user= $this->getUser();
        if(!$user){    
             // return $this->redirectToRoute('app_login');
        }
        //$iduser=1;
        $iduser = $this->getUser()->getIdUs();  

        $gruposRepository= $this->getDoctrine()->getRepository(Canales::class);
        $canalesItem = $gruposRepository->leerCanalesOrdenado();
        $canalesSuscrito= $gruposRepository->leerCanalesSuscrito();

        $userRepository= $this->getDoctrine()->getRepository(Usuarios::class);
        $userItem = $userRepository->leerPerfilUsuario($iduser); 

        

        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'canalesItem' => $canalesItem ,
            'canalesSuscrito' => $canalesSuscrito ,
            'param' => $userItem,
            'idUsuario'=> $iduser
        ]);
    }

    /**
     * @Route("/pantallaBuscar", name="pantallaBuscar")
     */
    public function pantallaBuscar()
    {
        return $this->render('principal/_pantallaBuscar.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }    

    /**
     * @Route("/escribirMensaje/{idCanal}/{mensaje}", name="escribirMensaje")
     */
    public function escribirMensaje(EntityManagerInterface $em, UsuariosRepository $repUso, 
                        CanalesRepository $repCan , int $idCanal, String $mensaje)
    {
        $usuario=$this->getUser();
        if (!$usuario){
            //return $this->redirectToRoute('login')
            $usuario=$repo->find(1);
        }

        $can = $repCan->find($idCanal);

        $obj = new Conversa();
        $obj->setMensaje($mensaje);
        $obj->setIdCanal($can);
        $obj->setUsuario($usuario);
        $obj->setFecha(new DateTime());

        $em->persist($obj);
        $em->flush();
        return new Response();
    }

}
