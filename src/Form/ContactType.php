<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'required' => false,
                'label' => 'Votre adresse mail',
                'row_attr' => [
                    'class' => 'form-floating mb-3'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Votre adresse mail'
                ],
                'constraints' => [
                    new Email([
                        "message" => "'{{ value }}' n'est pas une adresse mail valide."
                    ]),
                    new NotBlank([
                        "message" => "Ce champ ne peut être vide"
                    ])
                ]
            ])
            ->add('subject', TextType::class, [
                'required' => false,
                'label' => 'Objet de votre demande',
                'row_attr' => [
                    'class' => 'form-floating mb-3'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Objet de votre demande'
                ],
                'constraints' => [
                    new NotBlank([
                        "message" => "Veuillez indiquer l'objet de votre demande"
                    ]),
                    new Length([
                        'min' => 3,
                        'max' => 45,
                        'minMessage' => 'L\'Objet de votre message doit avoir au minimum {{ limit }} caractères',
                        'maxMessage' => 'L\'objet de votre message ne doit pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
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
                'constraints' => [
                    new Regex([
                        'pattern' => "/^[A-Z][-'a-zA-Z]+$/i",
                        "message" => "{{ value }} ne semble pas être un nom de famille"
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre nom de famille doit comporter au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre nom de famille doit comporter au maximum {{ limit }} caractères',
                    ]),
                ]
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
                'constraints' => [
                    new Regex([
                        'pattern' => "/^[A-Z][-'a-zA-Z]+$/i",
                        "message" => "{{ value }} ne semble pas être un prénom"
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre prénom doit comporter au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre prénom doit comporter au maximum {{ limit }} caractères',
                    ]),
                ]
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
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre texte doit comporter au moins {{ limit }} caractères'
                    ]),
                    new NotBlank([
                        "message" => "Ce champ ne peut être vide"
                    ])
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => "envoyer",
                'attr' => [
                    "class" => "btn-success btn btn-lg mt-3 ms-auto d-block"
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
