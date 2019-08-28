<?php

namespace App\Controller;


use App\Entity\Usuarios;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/ajaxLeerInformacion/{idUsuario}", name="ajaxLeerInformacion")
     */
    public function ajaxLeerInformacion()
    {
        return $this->render('user/ajaxInformacion.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
    * @Route("/ajaxBuscarUsuario/{busqueda}", name="ajaxBuscarUsuario" )
    */
    public function ajaxBuscarUsuario(string $busqueda)
    {
    $param=$busqueda;
    $usuarioRepository= $this->getDoctrine()->getRepository(Usuarios::class);
    $usuarioItem = $usuarioRepository->leerUsuarios($param);

    return $this->render('user/ajaxBusqueda.html.twig', [
    'param' => $usuarioItem,
    ]);
    }


    /**
    * @Route("/leerPerfilUsuario/{id}", name="leerPerfilUsuario" )
    */
    public function leerPerfilUsuario(int $id)
    {
    $usuarioRepository= $this->getDoctrine()->getRepository(Usuarios::class);
    $usuarioItem = $usuarioRepository->leerPerfilUsuario($id);

    return $this->render('user/ajaxInformacion.html.twig', [
    'param' => $usuarioItem
    ]);
    }
}
