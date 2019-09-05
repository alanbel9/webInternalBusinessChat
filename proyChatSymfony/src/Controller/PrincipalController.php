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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
    {       //  EntityManagerInterface $em , UsuariosRepository $repUso
        $user= $this->getUser();
        if(!$user){    
             return $this->redirectToRoute('app_login');
        }
        $iduser = $this->getUser()->getIdUs();  
        // Al logearse, modificar fecha ultima conexion
        $em = $this->getDoctrine()->getManager();
        $usuarioItem = $this->getDoctrine()->getRepository(Usuarios::class)->find($iduser);
        $usuarioItem->setFechaUltCon(new DateTime());
        $em->persist($usuarioItem);
        $em->flush();


        $gruposRepository= $this->getDoctrine()->getRepository(Canales::class);
        $canalesItem = $gruposRepository->leerCanalesOrdenado($iduser);
        $canalesSuscrito= $gruposRepository->leerCanalesSuscrito($iduser);

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
     * @Cache(expires="tomorrow", public=true)
     */
    public function pantallaBuscar()
    {
        return $this->render('principal/_pantallaBuscar.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }    

    /**
     * @Route("/escribirMensaje/{mensaje}", name="escribirMensaje")
     */
    public function escribirMensaje(EntityManagerInterface $em, UsuariosRepository $repUso, 
                        CanalesRepository $repCan, String $mensaje, SessionInterface $session )
    {
        $usuario=$this->getUser();
        if (!$usuario){
            return $this->redirectToRoute('app_login');
        }

        $can = $repCan->find($session->get("grupoActivo"));

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