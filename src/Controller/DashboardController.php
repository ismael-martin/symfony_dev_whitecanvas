<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Entity\Jornada;
use App\Form\UserType;
use App\Form\JornadaType;

class DashboardController extends AbstractController
{

    private $security;

    public function __construct(Security $security)
    {   
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security=$security;
    }


    //PANTALLA DE INICIO Y REGISTRO DE JORNADA

    /**
     * @Route("/home", name="dashboard")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->security->getUser();
        if ($user->getBloqueado() == true) {
            $this->addFlash("error",User::USUARIO_BLOQUEADO);
            return $this->redirectToRoute('app_logout');
        }

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Accesos Rápidos',
            'usuario'         => $user,

        ]);
    }

    /**
     * @Route("/registroJornada", name="registroJornada")
     */
    public function registroJornada(Request $request): Response
    {
        $request = $this->get('request_stack')->getMasterRequest();
        $route = $request->get('_route');
        $IPpublica = $_SERVER['REMOTE_ADDR'];
        $resultado = file_get_contents("http://ipinfo.io/$IPpublica/geo");
        $resultado = json_decode($resultado, true);
        $timezone  = $resultado['timezone'];
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->security->getUser();
        $ahora = new \DateTime('now',new \DateTimeZone($timezone));
        $jornada = new Jornada;
        if (count($user->getJornada()) % 2 == 0){
            $tipo = true;
            $txt = "entrada";
        } else {
            $tipo = false;
            $txt = "salida";
        }
        $form = $this->createForm(JornadaType::class, $jornada);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $jornada->setUsuarioId($user);
            $jornada->setHora($ahora);
            $jornada->setTipo($tipo);
            $em->persist($jornada);
            $em->flush();
            $this->addFlash('success','Registro de jornada de '.$txt.' correctamente guardado');
            //return $this->redirectToRoute($route);
        }

        return $this->render('dashboard/_jornada.html.twig', [
            
            'user' => $user,
            'formulario' => $form->createView(),
            'jornada' => $jornada,

        ]);
    }

    //OPERACIONES CON USUARIOS

    /**
     * @Route("/usuarios", name="usuarios")
     */
    public function usuariosListar(): Response
    {  
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository(User::class)->findAll();

        return $this->render('dashboard/usuarios/usuarios.html.twig', [
            'controller_name' => 'Lista de usuarios',
            'usuarios' => $usuarios,
        ]);
    }
    
    /**
     * @Route("/usuarios/registro", name="registro-usuarios")
     */
    public function usuariosRegistro(Request $request, UserPasswordEncoderInterface $pswdEncoder): Response
    {  
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $user->setPassword($pswdEncoder->encodePassword($user, $form['password']->getData()));
            $em->persist($user);
            $em->flush();
            $this->addFlash("success",User::REGISTRO_SUCCESS);
            return $this->redirectToRoute("usuarios");
        } 
        return $this->render('dashboard/usuarios/usuario-registro.html.twig', [
            'controller_name' => 'Registro de usuarios',
            'formulario' => $form->createView(),
        ]);
    }

    /**
     * @Route("/usuarios/editar/{id}", name="editar-usuario")
     */
    public function usuarioEditar(Request $request, UserPasswordEncoderInterface $pswdEncoder, int $id): Response
    {  
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user->setPassword($pswdEncoder->encodePassword($user, $form['password']->getData()));
            $em->persist($user);
            $em->flush();
            $this->addFlash("success",User::EDIT_SUCCESS);
            return $this->redirectToRoute("usuarios");
        }
        return $this->render('dashboard/usuarios/usuario-editar.html.twig', [
            'controller_name' => 'Editar usuario',
            'formulario' => $form->createView(),

        ]);
    }

    /**
     * @Route("/usuarios/borrar/{id}", name="borrar-usuario")
     */
    public function usuarioBorrar(Request $request, int $id): Response
    {  
        
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $em->remove($user);
        $em->flush();
        $this->addFlash("success",User::DELETE_SUCCESS);
        return $this->redirectToRoute("usuarios");
        
        
    }

    //JORNADAS DE USUARIO
    /**
     * @Route("/usuario/{id}/jornadas", name="jornadas-usuario")
     */
    public function usuarioJornadas(Request $request, int $id): Response
    {  
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $jornadasUsuario = $em->getRepository(jornada::class)->findByUsuarioOrdered($id);
        
        return $this->render('dashboard/usuarios/jornadas/usuario-jornadas.html.twig', [
            'controller_name' => 'Jornadas del usuario '.$user->getNombre().' '.$user->getApellidos(),
            'usuario'            => $user,
            'jornadas'        => $jornadasUsuario,
            

        ]);
    }

}
