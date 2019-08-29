<?php
//   CRUD PARA MODIFICAR E INSERTAR USUARIOS


namespace App\Controller;

use App\Entity\Usuarios;
use App\Form\UsuariosType;
use App\Repository\UsuariosRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/usuarios")
 */
class UsuariosController extends AbstractController
{


    /**
     * @Route("/mostrarImagen/{id}", name="mostrarImagen" , methods={"GET","POST"} )
     */
    public function mostrarImagen(Usuarios $usuario)
    {
        return new Response(stream_get_contents($usuario->getFoto()), 200, ["Content-type"=>"image/jpeg"] );
    }


      /**
     * @Route("/{idUs}/edit", name="usuarios_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Usuarios $usuario, UsuariosRepository $repo, UserPasswordEncoderInterface $passwordEncoder): Response
    {

        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password=$form->get('plainPassword')->getData();
            if ($password==null){
                $password=$repo->find($usuario->getIdUs())->getPassword();
                $usuario->setPassword($password);
            }else{
                $usuario->setPassword(
                    $passwordEncoder->encodePassword(  // UserInterface  
                        $usuario,
                        $password
                    )
                );

            }

            if ($usuario->getPassword()==null){
                $password=$repo->find($usuario->getIdUs())->getPassword();
                $usuario->setPassword($password);
            }


            $file= $form->get("foto")->getData();
            $contenido = file_get_contents($file);
            $usuario->setFoto($contenido);

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
