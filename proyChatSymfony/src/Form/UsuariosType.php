<?php

namespace App\Form;

use App\Entity\Usuarios;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UsuariosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('fotoArchivo' , FileType::class , array(
            'mapped' => false, 
            'attr' => [
                'widget' => 'single_text',
                'class' => 'form-control'
            ] 
        ))
        ->add('correo' , TextType::class , array(
            'attr' => [
                'class' => 'form-control',
                'readonly' => 'yes'
            ]
        ))
        ->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'Las password deben coincidir.',
            'options' => ['attr' => ['class' => 'form-control']],
            'required' => false,
            'mapped' => false,
            'first_options'  => ['attr' => ['placeholder' => 'Password' , 'class'=>'form-control'] ],
            'second_options' => ['attr' => ['placeholder' => 'Repite password' , 'class'=>'form-control'] ],
        ])
        ->add('nombre', TextType::class , array(
            'attr' => [
                'class' => 'form-control'
            ]
        ))
        ->add('apellidos', TextType::class , array(
            'attr' => [
                'class' => 'form-control'
            ]
        ))
        ->add('puesto', ChoiceType::class , array(
            'choices' => [
                "Desarrollador" => 'Desarrollador',
                "Analista" => 'Analista' ,
                'Sistemas' => 'Sistemas' ,
                'Seguridad' => 'Seguridad' ,
                'Recursos Humanos' => 'Recursos Humanos' ,
                'Administracion' => 'Administración'
            ],
            'attr' => [
                'class' => 'form-control'
            ]
        ))
        ->add('conocimientos', TextareaType::class , array(
            'attr' => [
                'class' => 'form-control'
            ]
        ))
        ->add('aficiones', TextareaType::class , array(
            'attr' => [
                'class' => 'form-control'
            ]
        ))
        /*->add('foto', TextType::class , array(
            'attr' => [
                'class' => 'form-control'
            ]
        ))*/
        ->add('fechaNac', DateType::class , array(
            'widget' => 'single_text',
            'attr' => [
                'class' => 'form-control'
            ]
        ))
        ->add('submit', SubmitType::class , array(
            'attr' => [
                'btn_label' => "Enviar",
                'class' => 'btn btn-primary btn-block p-2 save"'
            ]
        ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usuarios::class,
        ]);
    }
}
