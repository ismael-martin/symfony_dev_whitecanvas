<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Entity\Departamentos;
use App\Form\DepartamentosFormType;

class DepartamentosController extends AbstractController
{
    /**
     * @Route("/departamentos", name="departamentos")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $departamentos = $em->getRepository(Departamentos::class)->findAll();

        return $this->render('dashboard/departamentos/departamentos.html.twig', [
            'controller_name' => 'Departamentos',
            'departamentos' => $departamentos,
        ]);
    }

    /**
     * @Route("/departamentos/registro", name="registro-departamento")
     */
    public function departamentoRegistro(Request $request): Response
    {  
        $dept = new Departamentos();
        $form = $this->createForm(DepartamentosFormType::class, $dept);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($dept);
            $em->flush();
            $this->addFlash("success",Departamentos::REGISTRO_SUCCESS);
            return $this->redirectToRoute("departamentos");
        } 
        return $this->render('dashboard/departamentos/departamento-registro.html.twig', [
            'controller_name' => 'Registro de departamento',
            'formulario' => $form->createView(),
        ]);
    }


    /**
     * @Route("/departamento/editar/{id}", name="editar-departamento")
     */
    public function usuarioEditar(Request $request, int $id): Response
    {  
        $em = $this->getDoctrine()->getManager();
        $dept = $em->getRepository(Departamentos::class)->find($id);
        $form = $this->createForm(DepartamentosFormType::class, $dept);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->persist($dept);
            $em->flush();
            $this->addFlash("success",Departamentos::EDIT_SUCCESS);
            return $this->redirectToRoute("departamentos");
        }
        return $this->render('dashboard/departamentos/departamento-editar.html.twig', [
            'controller_name' => 'Editar departamento',
            'formulario' => $form->createView(),

        ]);
    }


    /**
     * @Route("/departamentos/borrar/{id}", name="borrar-departamento")
     */
    public function deparamentoBorrar(Request $request, int $id): Response
    {  
        
        $em = $this->getDoctrine()->getManager();
        $dept = $em->getRepository(Departamentos::class)->find($id);
        $em->remove($dept);
        $em->flush();
        $this->addFlash("success",Departamentos::DELETE_SUCCESS);
        return $this->redirectToRoute("departamentos");
        
        
    }
    
}
