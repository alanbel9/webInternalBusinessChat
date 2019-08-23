<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/grupos")
 */
class GruposController extends AbstractController
{

/**
     * @Route("/insertarUsuario/{idUsuario}", name="insertarUsuario")
     */
    public function insertarUsuario(int $idUsuario)
    {
        $UCRepository= $this->getDoctrine()->getRepository(UC::class);
        $UCItem = $UCRepository->insertarUsuarioEnGrupo();

    }



    /**
     * @Route("/ajaxObtenerConversacion/{idGrupo}", name="ajaxObtenerConversacion")
     */
    public function ajaxObtenerConversacion(int $idGrupo)
    {
        return $this->render('grupos/ajaxConversacion.html.twig', [
            'controller_name' => 'GruposController',
        ]);
    }

    /**
     * @Route("/ajaxObtenerInformacion/{idGrupo}", name="ajaxObtenerInformacion")
     */
    public function ajaxObtenerInformacion(int $idGrupo)
    {
        return $this->render('grupos/ajaxInformacion.html.twig', [
            'controller_name' => 'GruposController',
        ]);
    }    



    /**
     * @Route("/jsonObtenerConversacion/{idGrupo}", name="jsonObtenerConversacion")
     */
    public function jsonObtenerConversacion(int $idGrupo)
    {
        //Obtener el repositorio
        //Ejecutar una funcion hecho por vosotros que internamente lleve DQL, 

        $o="hola";
        return $this->json($o);
    }

}
