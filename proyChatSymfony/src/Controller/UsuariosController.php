<?php
//   CRUD PARA MODIFICAR E INSERTAR USUARIOS
namespace App\Controller;

use DateTime;
use App\Entity\Usuarios;
use App\Form\UsuariosType;
use App\Repository\UsuariosRepository;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/usuarios")
 */
class UsuariosController extends AbstractController
{
    /**
     * @Route("/mostrarImagen/{id}", name="mostrarImagen" , methods={"GET","POST"} )
     * @Cache(lastModified="canal.getFechamodificacion()")
     */
    public function mostrarImagen(Usuarios $usuario)
    {
        $fotoArchivo=$usuario->getFotoArchivo();
        if ($fotoArchivo){
            return new Response(stream_get_contents($fotoArchivo), 200, ["Content-type"=>"image/jpeg"] );
        }else{
            $ruta = __DIR__ . '/../../public/resources/usuario-sin-foto1.jpg';
            return $this->file($ruta);
        }
    }

    /**
     * @Route("/edit", name="usuarios_edit", methods={"GET","POST"})
     */
    public function edit( Request $request, UsuariosRepository $repo, UserPasswordEncoderInterface $passwordEncoder): Response
    {

        $usuario=$this->getUser();
        $iduser = $usuario->getIdUs();
        if (!$usuario){
            return $this->redirectToRoute('login');
            //$usuario=$repo->find(1);
        }

        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Actualizar campo fechamodificacion del usuario
            //$em = $this->getDoctrine()->getManager();
            //$usuarioItem = $repo->find($iduser);
            //$em->persist($usuarioItem);
            //$em->flush();

            $usuario->setFechamodificacion(new DateTime());

            
            // Si password la dejamos vacia ...
            $password=$form->get('plainPassword')->getData();
            if ($password==null){
                $password=$repo->find($usuario->getIdUs())->getPassword();
                $usuario->setPassword($password);
            }else{
                // si la password está rellena , cambiar atributo require
                $usuario->setPassword(
                    $passwordEncoder->encodePassword($usuario,$password)
                );
            }
            
            if ($usuario->getPassword()==null){
                $password=$repo->find($usuario->getIdUs())->getPassword();
                $usuario->setPassword($password);
            }
            // Si foto la dejamos vacía, que mantenga la que hay en BBDD
            $file= $form->get("fotoArchivo")->getData();
            if ($file==null){
                $file=$repo->find($usuario->getIdUs())->getFotoArchivo();
                $usuario->setFotoArchivo($file);
            } else{
                $contenido = file_get_contents($file);
                $usuario->setFotoArchivo($contenido);
            }
            
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('principal');   
        }
        return $this->render('usuarios/edit.html.twig', [
            'usuario' => $usuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="usuarios_index", methods={"GET"})
     */
    public function index(UsuariosRepository $usuariosRepository): Response
    {
        return $this->render('usuarios/index.html.twig', [
            'usuarios' => $usuariosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="usuarios_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $usuario = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();

            return $this->redirectToRoute('usuarios_index');
        }
        return $this->render('usuarios/new.html.twig', [
            'usuario' => $usuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idUs}", name="usuarios_show", methods={"GET"})
     */
    public function show(Usuarios $usuario): Response
    {
        return $this->render('usuarios/show.html.twig', [
            'usuario' => $usuario,
        ]);
    }

    /**
     * @Route("/{idUs}", name="usuarios_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Usuarios $usuario): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usuario->getIdUs(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($usuario);
            $entityManager->flush();
        }
        return $this->redirectToRoute('usuarios_index');
    }
}