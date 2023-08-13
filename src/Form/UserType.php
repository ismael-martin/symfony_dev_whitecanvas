<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                        'label'    => 'Email',
                    ])
            ->add('roles', ChoiceType::class, [
                         'label' => 'Rol de Usuario',
                         'choices' => [
                             'Admin' => 'ROLE_ADMIN',
                             'Trabajador' => 'ROLE_USER'
                         ],

                         'multiple' => true,
                    ])
            ->add('password', PasswordType::class, [
                        'label'    => 'Contraseña',
                    ])
            ->add('nombre', TextType::class, [
                        'label'    => 'Nombre',
                    ])
            ->add('apellidos', TextType::class, [
                        'label'    => 'Apellidos',
                    ])
            ->add('bloqueado', CheckboxType::class, [
                        'label'    => 'Usuario bloqueado',
                        'required' => false,
                    ])
            ->add('dni', TextType::class, [
                        'label'    => 'DNI',
                        'required' => false,
                    ])
            ->add('fnacimiento', BirthdayType::class, [
                        'label'    => 'Fecha de Nacimiento',
                        'widget'   => 'single_text',
                        'required' => false,
                    ])
            ->add('lnacimiento', TextType::class, [
                        'label'    => 'Lugar de Nacimiento',
                        'required' => false,
                    ])
            ->add('sexo', TextType::class, [
                        'label'    => 'Sexo',
                        'required' => false,
                    ])
            ->add('nacionalidad', TextType::class, [
                        'label'    => 'Nacionalidad',
                        'required' => false,
                    ])
            ->add('estCivil', TextType::class, [
                        'label'    => 'Estado Civil',
                        'required' => false,
                    ])
            ->add('permConducir', TextType::class, [
                        'label'    => 'Permiso de Conducir',
                        'required' => false,
                    ])
            ->add('vehiProp', CheckboxType::class, [
                        'label'    => 'Vehiculo propio',
                        'required' => false,
                    ])
            ->add('vehiEmp', CheckboxType::class, [
                        'label'    => 'Vehiculo empresa',
                        'required' => false,
                    ])
            ->add('telefono', TextType::class, [
                        'label'    => 'Teléfono',
                        'required' => false,
                    ])
            ->add('Guardar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
