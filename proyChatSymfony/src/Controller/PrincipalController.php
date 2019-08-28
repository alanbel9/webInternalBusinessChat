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
        $gruposRepository= $this->getDoctrine()->getRepository(Canales::class);
        $canalesItem = $gruposRepository->leerCanalesOrdenado();
        $canalesSuscrito= $gruposRepository->leerCanalesSuscrito();

        $userRepository= $this->getDoctrine()->getRepository(Usuarios::class);
        $userItem = $userRepository->leerPerfilUsuarioSession();  // ojo ID USUARIO !!!!!!!!

        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'canalesItem' => $canalesItem ,
            'canalesSuscrito' => $canalesSuscrito ,
            'param' => $userItem
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
     * @Route("/pantallaModificarPerfil", name="pantallaModificarPerfil")
     */
    public function pantallaModificarPerfil()
    {
        return $this->render('principal/_pantallaModificarPerfil.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);    //  NO SE USA.     SE USA DENTRO DE USUARIOSCONTROLLER !!!!
    }   



     /**
     * @Route("/login", name="login")
     */
    public function pantallaLogin()
    {
        return $this->render('login.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    } 

    /**
     * @Route("/escribirMensaje/{idUsuario}/{idCanal}/{mensaje}", name="escribirMensaje")
     */
    public function escribirMensaje(EntityManagerInterface $em, UsuariosRepository $repUso, 
                        CanalesRepository $repCan , int $idUsuario, int $idCanal, String $mensaje)
    {
        //$usuarioItem= $this->getDoctrine()->getRepository(Usuarios::class)->find($idUsuario);
        $usu = $repUso->find($idUsuario);
        $can = $repCan->find($idCanal);

        $obj = new Conversa();
        $obj->setMensaje($mensaje);
        $obj->setIdCanal($can);
        $obj->setUsuario($usu);
        $obj->setFecha(new DateTime());

        $em->persist($obj);
        $em->flush();
        return new Response();
    }

}
