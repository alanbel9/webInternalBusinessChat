<?php

namespace App\Controller;

use DateTime;
use App\Entity\UC;
use App\Entity\Canales;
use App\Entity\Conversa;
use App\Entity\Usuarios;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/grupos")
 */
class GruposController extends AbstractController
{
    /**
     * @Route("/insertarUsuario/{idGrupo}", name="insertarUsuario")
     */
    public function insertarUsuario(int $idGrupo)
    {
        
        $user=$this->getUser();
        if ($user){
            $idUsuario=$user->getIdUs();
        }else {
            return $this->redirectToRoute('app_login');
        }

        $UCregistro= new UC();

        $usuarioItem= $this->getDoctrine()->getRepository(Usuarios::class)->find($idUsuario);
        $grupoItem= $this->getDoctrine()->getRepository(Canales::class)->find($idGrupo);

        $UCregistro->setIdUs( $usuarioItem );
        $UCregistro->setCanal( $grupoItem );
        $UCregistro->setFechaInscripcion(new DateTime());
       
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($UCregistro);
        $em->flush();

        return new Response("Insertado usuario a grupo.");
    }

    /**
     * @Route("/ajaxObtenerConversacion/{idGrupo}", name="ajaxObtenerConversacion")
     */
    public function ajaxObtenerConversacion(int $idGrupo, SessionInterface $session)
    {
        $suscripcion= $this->getDoctrine()->getRepository(UC::class)->findOneBy([                   
            'idUs' => $this->getUser()->getIdUs(),
            'canal' => $idGrupo
        ]);
        $fechaSuscripcion=$suscripcion->getFechaInscripcion();
        if(!$fechaSuscripcion){
            return $this->redirectToRoute('app_login');           
        }
        $session->set('fechaSuscripcion', $fechaSuscripcion);
        return $this->render('grupos/ajaxConversacion.html.twig', [
            'controller_name' => 'GruposController',
            'idGrupo' => $idGrupo 
        ]);
    }

    /**
     * @Route("/ajaxRefrescarPantallaConversacion/{idGrupo}/{idUltimoMensaje}", name="ajaxRefrescarPantallaConversacion")
     */
    public function ajaxRefrescarPantallaConversacion(int $idGrupo, int $idUltimoMensaje, SessionInterface $session)
    {
        $fechaSuscripcion=$session->get("fechaSuscripcion");
        if(!$fechaSuscripcion){
            return $this->redirectToRoute('app_login');
        }
        $conversaRepository= $this->getDoctrine()->getRepository(Conversa::class);
        $mensajesItem = $conversaRepository->refrescarMensajesGrupo($idGrupo, $idUltimoMensaje, $fechaSuscripcion);

        return $this->json(['texto' => $mensajesItem, 'idGrupoRecibido' => $idGrupo]);
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
        $UCRepository->borrarGrupo($idGrupo, $this->getUser()->getIdUs());

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
     * @Route("/mostrarImagengrupo/{id}", name="mostrarImagengrupo" , methods={"GET","POST"} )
     */
    public function mostrarImagengrupo(Canales $canal)
    {
        return new Response(stream_get_contents($canal->getImagen()), 200, ["Content-type"=>"image/jpeg"] );
    }
}