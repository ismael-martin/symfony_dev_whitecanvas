<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Qipsius\TCPDFBundle\Controller\TCPDFController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Alumnos;
use App\Form\AlumnosType;

class AlumnosController extends AbstractController
{
    protected $tcpdf;

    public function __construct(TCPDFController $tcpdf) 
    {
        $this->tcpdf = $tcpdf;
    }
    
    //Index de la pantalla de alumnos

    /**
     * @Route("/alumnos", name="alumnos")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $alumnos = $em->getRepository(Alumnos::class)->findAll();

        return $this->render('consultas/alumnos/alumnos.html.twig', [
            'controller_name' => 'Lista de alumnos',
            'alumnos' => $alumnos,
        ]);
    }

    /**
     * @Route("/alumnos/registro", name="registro-alumnos")
     */
    public function alumnosRegistro(Request $request): Response
    {  
        $alumno = new Alumnos();
        $form = $this->createForm(AlumnosType::class, $alumno);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();
            $this->addFlash("success",Alumnos::REGISTRO_SUCCESS);
            return $this->redirectToRoute("alumnos");
        } 
        return $this->render('consultas/alumnos/alumno-registro.html.twig', [
            'controller_name' => 'Registro de alumnos',
            'formulario' => $form->createView(),
        ]);
    }

    /**
     * @Route("/alumnos/editar/{id}", name="editar-alumno")
     */
    public function alumnoEditar(Request $request, int $id): Response
    {  
        $em = $this->getDoctrine()->getManager();
        $alumno = $em->getRepository(Alumnos::class)->find($id);
        $form = $this->createForm(AlumnosType::class, $alumno);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->persist($alumno);
            $em->flush();
            $this->addFlash("success",Alumnos::EDIT_SUCCESS);
            return $this->redirectToRoute("alumnos");
        }
        return $this->render('consultas/alumnos/alumno-editar.html.twig', [
            'controller_name' => 'Editar alumno',
            'formulario' => $form->createView(),

        ]);
    }

    /**
     * @Route("/alumnos/borrar/{id}", name="borrar-alumno")
     */
    public function alumnoBorrar(Request $request, int $id): Response
    {  
        
        $em = $this->getDoctrine()->getManager();
        $alumno = $em->getRepository(Alumnos::class)->find($id);
        $em->remove($alumno);
        $em->flush();
        $this->addFlash("success",User::DELETE_SUCCESS);
        return $this->redirectToRoute("alumnos");
        
        
    }
}
