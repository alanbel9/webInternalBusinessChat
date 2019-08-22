<?php

namespace App\Controller;

use App\Entity\Canales;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BBDDController extends AbstractController
{
    /**
     * @Route("/consultarGrupos", name="consultarGrupos")
     */
    public function consultarGrupos()
    {

        $gruposRepository= $this->getDoctrine()->getRepository(Canales::class);
        $canalesItem = $gruposRepository->leerCanalesOrdenado();

        return $this->render('bbdd/consultarGrupos.html.twig', [
            'controller_name' => 'BBDDController',
            'a' => 4,
            'canalesItem' => $canalesItem
        ]);
    }
}
