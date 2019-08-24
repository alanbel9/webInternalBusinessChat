<?php

namespace App\Controller;

use App\Entity\UC;
use App\Entity\Canales;
use App\Entity\Usuarios;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/grupos")
 */
class GruposController extends AbstractController
{

    /**
     * @Route("/insertarUsuario/{idGrupo}-{idUsuario}", name="insertarUsuario")
     */
    public function insertarUsuario(int $idUsuario,int $idGrupo)
    {
        //$UCRepository= $this->getDoctrine()->getRepository(UC::class);
        //$UCItem = $UCRepository->insertarUsuarioEnGrupo();

        $UCregistro= new UC();
        $usuarioItem= $this->getDoctrine()->getRepository(Usuarios::class)->find($idUsuario);
        $grupoItem= $this->getDoctrine()->getRepository(Canales::class)->find($idGrupo);

        $UCregistro->setIdUs( $usuarioItem);
        $UCregistro->setIdCanal( $grupoItem );
       
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($UCregistro);
        $em->flush();

        return new Response("Insertado usuario a grupo.");
        // se le llama asi:  /grupos/insertarUsuario/1-2
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