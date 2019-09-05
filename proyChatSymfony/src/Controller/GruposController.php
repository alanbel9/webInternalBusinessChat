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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Session\SessionInterface;


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
     * @Cache("Etag='Canales' ~ canal.getDescripcion() ~ canal.getNombre())
     */
    public function ajaxObtenerConversacion(Canales $canal, int $idGrupo, SessionInterface $session)
    {
        $suscripcion= $this->getDoctrine()->getRepository(UC::class)->findOneBy([                   
            'idUs' => $this->getUser()->getIdUs(),
            'canal' => $idGrupo
        ]);
        $fechaSuscripcion=$suscripcion->getFechaInscripcion();
        if(!$fechaSuscripcion){                                 /////////////////// Para hacer cosas en ese grupo comprueba que estas inscrito
            return $this->redirectToRoute('app_login');           
        }
        $session->set('fechaSuscripcion', $fechaSuscripcion);
        $session->set('grupoActivo', $idGrupo);
        return $this->render('grupos/ajaxConversacion.html.twig', [
            'controller_name' => 'GruposController',
            'idGrupo' => $idGrupo 
        ]);
    }

    /**
     * @Route("/ajaxRefrescarPantallaConversacion/{idUltimoMensaje}", name="ajaxRefrescarPantallaConversacion")
     */
    public function ajaxRefrescarPantallaConversacion(int $idUltimoMensaje, SessionInterface $session)
    {
        $fechaSuscripcion=$session->get("fechaSuscripcion");
        if(!$fechaSuscripcion){
            return $this->redirectToRoute('app_login');
        }
        $conversaRepository= $this->getDoctrine()->getRepository(Conversa::class);
        $mensajesItem = $conversaRepository->refrescarMensajesGrupo($session->get("grupoActivo"), $idUltimoMensaje, $fechaSuscripcion);

        return $this->json(['texto' => $mensajesItem, 'idGrupoRecibido' => $session->get("grupoActivo")]);
    }

    /**
     * @Route("/ajaxOpciones/", name="ajaxOpciones")
     * @Cache(expires="tomorrow")
     */
    public function ajaxOpciones()
    {
        return $this->render('grupos/ajaxOpciones.html.twig');
    }    

    /**
     * @Route("/borrarGrupo/", name="borrarGrupo")
     */
    public function borrarGrupo(SessionInterface $session)
    {
        $UCRepository= $this->getDoctrine()->getRepository(UC::class);
        $UCRepository->borrarGrupo($session->get("grupoActivo"), $this->getUser()->getIdUs());

        return new Response("Grupo borrado de la lista de suscripciones.");
    }    

    /**
     * @Route("/ajaxObtenerInformacion/", name="ajaxObtenerInformacion")
     */
    public function ajaxObtenerInformacion(SessionInterface $session)
    {
        $canalesRepository= $this->getDoctrine()->getRepository(Canales::class);
        $canalesItem = $canalesRepository->leerInfoCanales($session->get("grupoActivo"));
    
        return $this->render('grupos/ajaxInformacion.html.twig', [
            'param' => $canalesItem,
        ]);
    }    

    /**
     * @Route("/mostrarImagengrupo/{id}", name="mostrarImagengrupo" , methods={"GET","POST"} )
     * @Cache(lastModified="canal.getFechaModificacion()")
     */
    public function mostrarImagengrupo(Canales $canal)
    {
        return new Response(stream_get_contents($canal->getImagen()), 200, ["Content-type"=>"image/jpeg"] );
    }
}