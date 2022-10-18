<?php

namespace App\Form;

use App\Entity\Survey;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Validator\Constraints\NotNull;

class SurveyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "required" => false,
                "label" => "Votre prénom",
                "row_attr" => ["class" => "form-floating mb-3"],
                "attr" => ["class" => "form-control", "placeholder" => "Votre prénom"]
            ])
            ->add('lastName', TextType::class, [
                "required" => false,
                "label" => "Votre nom",
                "row_attr" => ["class" => "form-floating mb-3"],
                "attr" => ["class" => "form-control", "placeholder" => "Votre nom"]
            ])
            ->add('email', EmailType::class, [
                "label" => "Votre email",
                "row_attr" => ["class" => "form-floating mb-3"],
                "attr" => ["class" => "form-control", "placeholder" => "Votre email"]
            ])
            ->add('country', CountryType::class, [
                "required" => false,
                "label" => "Votre pays",
                "row_attr" => ["class" => "form-floating mb-3"],
                "attr" => ["class" => "form-control", "placeholder" => "Votre pays"]
            ])
            /*      ->add('market', TextType::class, [
                "label" => "Connaissez-vous des commerces dédiés aux personnes agées?",
                "attr" => ["class" => "form-control", "placeholder" => "Votre nom"]
            ]) */
            ->add('clothes', CollectionType::class, [
                "required" => false,
                "label" => false,
                'entry_type' => ClothesType::class,
                'attr' => ['class' => 'fw-bold'],
                'entry_options' => [
                    'label' => "Où acheter des vêtements, du matériel et tout autre accessoire dédiés aux séniors?",
                    'row_attr' => ['class' => 'fw-bold text-success'],
                    'attr' => ['class' => 'fw-normal text-dark']
                ],
                "by_reference" => false,
                "allow_add" => true,
            ])
            ->add('specialists', CollectionType::class, [
                "required" => false,
                "label" => false,
                'entry_type' => SpecialistsType::class,
                'attr' => ['class' => 'fw-bold'],
                'entry_options' => [
                    'label' => "Spécialistes locaux de la prise en charge des personnes âgées",
                    'row_attr' => ['class' => 'fw-bold text-success'],
                    'attr' => ['class' => 'fw-normal text-dark']
                ],
                "by_reference" => false,
                "allow_add" => true,
            ])

            ->add('hospitals', CollectionType::class, [
                "required" => false,
                "label" => false,
                'entry_type' => HospitalsType::class,
                'attr' => ['class' => 'fw-bold'],
                'entry_options' => [
                    'label' =>
                    "Hôpitaux et centres spécialisés dans la prise en 
                    charge gériatrique accessibles localement",
                    'row_attr' => ['class' => 'fw-bold text-success'],
                    'attr' => ['class' => 'fw-normal text-dark']
                ],
                "by_reference" => false,
                "allow_add" => true,
            ])

            ->add('aids', CollectionType::class, [
                "required" => false,
                "label" => false,
                'entry_type' => AidsType::class,
                'attr' => ['class' => 'fw-bold'],
                'entry_options' => [
                    'label' => "Aides auxquelles ont droit les personnes âgées",
                    'row_attr' => ['class' => 'fw-bold text-success'],
                    'attr' => ['class' => 'fw-normal text-dark']
                ],
                "by_reference" => false,
                "allow_add" => true,
            ])

            ->add('digits', CollectionType::class, [
                "required" => false,
                "label" => false,
                'entry_type' => DigitsType::class,
                'attr' => ['class' => 'fw-bold'],
                'entry_options' => [
                    'label' => "Chiffres récents concernant les personnes âgées",
                    'row_attr' => ['class' => 'fw-bold text-success'],
                    'attr' => ['class' => 'fw-normal text-dark']
                ],
                "by_reference" => false,
                "allow_add" => true,
            ])

            ->add('politics', CollectionType::class, [
                "required" => false,
                "label" => false,
                'entry_type' => DigitsType::class,
                'attr' => ['class' => 'fw-bold'],
                'entry_options' => [
                    'label' => "Chiffres récents concernant les personnes âgées",
                    'row_attr' => ['class' => 'fw-bold text-success'],
                    'attr' => ['class' => 'fw-normal text-dark']
                ],
                "by_reference" => false,
                "allow_add" => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Survey::class,
        ]);
    }
}
