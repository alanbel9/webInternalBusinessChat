<?php

namespace App\Controller;

use App\Entity\UC;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/grupos")
 */
class GruposController extends AbstractController
{

    /**
     * @Route("/insertarUsuario/{idUsuario}/{idGrupo}", name="insertarUsuario")
     */
    public function insertarUsuario(int $idUsuario,int $idGrupo)
    {
        //$UCRepository= $this->getDoctrine()->getRepository(UC::class);
        //$UCItem = $UCRepository->insertarUsuarioEnGrupo();

        $UCregistro= new UC();
        $UCregistro->setIdCanal($idGrupo);
        $UCregistro->setIdUs($idUsuario);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($UCregistro);
        $em->flush();

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
