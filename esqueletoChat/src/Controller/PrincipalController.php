<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/principal", name="principal")
     */
    public function index()
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }

    /**
     * @Route("/principal/pantallaBuscar", name="pantallaBuscar")
     */
    public function pantallaBuscar()
    {
        return $this->render('principal/pantallaBuscar.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }    
}
