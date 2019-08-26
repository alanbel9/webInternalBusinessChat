<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/modificarInfoUsuario/{idUsuario}", name="modificarInfoUsuario")
     */
    public function modificarInfoUsuario(int $idUsuario){

        // php bin/console make:form   ????  estudiar

        return new Response("Usuario modificado.");
    }


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
    'param' => $param,
    ]);
    }

}
