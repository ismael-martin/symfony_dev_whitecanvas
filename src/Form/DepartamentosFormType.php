<?php

namespace App\Form;

use App\Entity\Departamentos;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DepartamentosFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                        'label'    => 'Nombre del departamento',
                    ])
            ->add('descripcion', TextareaType::class, [
                    'label' => 'Descripción',
                    'required' => false,
                ])
            ->add('usuarios', EntityType::class, [
                'label'    => 'Usuarios del departamento',
                'class' => User::class,
                'choice_label' => function($usuarios){
                    return $usuarios->getNombre().' '.$usuarios->getApellidos();
                },
                'multiple' => true,
                'attr' => array('style' => 'height: 200px'),])
            ->add('Guardar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Departamentos::class,
        ]);
    }
}
