<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName', TextType::class, [
                'required' => false,
                'label' => 'Votre nom de famille',
                'row_attr' => [
                    'class' => 'form-floating mb-3'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Votre nom de famille'
                ],
                'constraints' => []
            ])
            ->add('firstName', TextType::class, [
                'required' => false,
                'label' => 'Votre prénom',
                'row_attr' => [
                    'class' => 'form-floating mb-3'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Votre prénom'
                ],
                'constraints' => []
            ])
            ->add('country', CountryType::class, [
                'required' => false,
                'label' => 'Pays',
                'row_attr' => [
                    'class' => 'form-floating mb-3'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Pays'
                ],
                'constraints' => []
            ])
            ->add('content', TextareaType::class, [
                'required' => false,
                'label' => 'Vos informations ou votre demande',
                'row_attr' => [
                    'class' => 'form-floating mb-3',

                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Vos informations ou votre demande',
                ],
                'constraints' => []
            ])
            ->add('save', SubmitType::class, [
                'label' => "envoyer",
                'row_attr' => [
                    'd-flex justify-content-end'
                ],
                'attr' => [
                    "class" => "btn-success btn mt-3 ms-auto"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
