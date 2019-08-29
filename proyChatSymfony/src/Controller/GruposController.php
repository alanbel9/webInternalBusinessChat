<?php

namespace App\Controller;

use App\Entity\UC;
use App\Entity\Canales;
use App\Entity\Conversa;
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

        $UCregistro->setIdUs( $usuarioItem );
        $UCregistro->setCanal( $grupoItem );
       
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($UCregistro);
        $em->flush();

        return new Response("Insertado usuario a grupo.");
        // se le llama asi:  /grupos/insertarUsuario/2-1
        // Esto va unido a una función insertarUser() en _navbar  y a _consultarGrupos donde se usa dicha función.
    }



    /**
     * @Route("/ajaxObtenerConversacion/{idGrupo}", name="ajaxObtenerConversacion")
     */
    public function ajaxObtenerConversacion(int $idGrupo)
    {
        $conversaRepository= $this->getDoctrine()->getRepository(Conversa::class);
        $mensajesItem = $conversaRepository->leerMensajesGrupo($idGrupo);

        return $this->render('grupos/ajaxConversacion.html.twig', [
            'controller_name' => 'GruposController',
            'mensajesItem' => $mensajesItem,
            'idGrupo' => $idGrupo
        ]);
    }

    /**
     * @Route("/ajaxRefrescarPantallaConversacion/{idGrupo}", name="ajaxRefrescarPantallaConversacion")
     */
    public function ajaxRefrescarPantallaConversacion(int $idGrupo)
    {
        $conversaRepository= $this->getDoctrine()->getRepository(Conversa::class);
        $mensajesItem = $conversaRepository->leerMensajesGrupo($idGrupo);

        return $this->render('grupos/_consultarConversacionGrupo.html.twig', [
            'controller_name' => 'GruposController',
            'mensajesItem' => $mensajesItem
        ]);
    }

    /**
     * @Route("/ajaxOpciones/{idGrupo}", name="ajaxOpciones")
     */
    public function ajaxOpciones(int $idGrupo)
    {
        return $this->render('grupos/ajaxOpciones.html.twig', [
            'idGrupo' => $idGrupo,
        ]);
    }    

    /**
     * @Route("/borrarGrupo/{idGrupo}", name="borrarGrupo")
     */
    public function borrarGrupo(int $idGrupo)
    {
        $UCRepository= $this->getDoctrine()->getRepository(UC::class);
        $UCRepository->borrarGrupo($idGrupo);

        return new Response("Grupo borrado de la lista de suscripciones.");
    }    

    /**
     * @Route("/ajaxObtenerInformacion/{idGrupo}", name="ajaxObtenerInformacion")
     */
    public function ajaxObtenerInformacion(int $idGrupo)
    {

        $canalesRepository= $this->getDoctrine()->getRepository(Canales::class);
        $canalesItem = $canalesRepository->leerInfoCanales($idGrupo);
    
        return $this->render('grupos/ajaxInformacion.html.twig', [
        'param' => $canalesItem,
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
