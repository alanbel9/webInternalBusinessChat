<?php

namespace App\Controller;

use App\Entity\Canales;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/principal", name="principal")
     */
    public function index()
    {

        $gruposRepository= $this->getDoctrine()->getRepository(Canales::class);
        $canalesItem = $gruposRepository->leerCanalesOrdenado();


        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'canalesItem' => $canalesItem
        ]);
    }

    /**
     * @Route("/principal/pantallaBuscar", name="pantallaBuscar")
     */
    public function pantallaBuscar()
    {
        return $this->render('principal/_pantallaBuscar.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    }    



    /**
     * @Route("/principal/pantallaModificarPerfil", name="pantallaModificarPerfil")
     */
    public function pantallaModificarPerfil()
    {
        return $this->render('principal/_pantallaModificarPerfil.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
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
     * @Route("/principal/pantallaInfoGrupo", name="pantallaInfoGrupo")
     */
    public function pantallaInfoGrupo()
    {
        return $this->render('principal/_pantallaInfoGrupo.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    } 



    /**
     * @Route("/principal/pantallaChat", name="pantallaChat")
     */
    public function pantallaChat()
    {
        return $this->render('principal/_pantallaChat.html.twig', [
            'controller_name' => 'PrincipalController',
        ]);
    } 
    


}
