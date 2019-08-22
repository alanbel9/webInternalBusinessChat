<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BBDDController extends AbstractController
{
    /**
     * @Route("/bbdd", name="bbdd")
     */
    public function consultarGrupos()
    {

        $gruposRepository= $this->getDoctrine()->getRepository(Canales::class);
        $grupos = $gruposRepository->findAll();
        // falta ...

        return $this->render('bbdd/index.html.twig', [
            'controller_name' => 'BBDDController',

        ]);
    }
}
