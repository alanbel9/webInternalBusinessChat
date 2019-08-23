<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/ajaxBuscarUsuario/{busqueda}", name="ajaxBuscarUsuario")
     */
    public function ajaxBuscarUsuario()
    {
        return $this->render('user/ajaxBusqueda.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


}
