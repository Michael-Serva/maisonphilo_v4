<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AidsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add("public", TextType::class, [
            "label" => "Dispositifs publics",
            "label_attr" => [
                "class" => "fs-1 text-success fw-bold ms-3"
            ],
            "attr" => [
                "class" => "d-none"
            ]
        ])

        ->add('publicAssistanceFinancialSupport', ChoiceType::class, [
            "mapped" => false,
            "label" => "Y a-t-il des dispositifs publics d’assistance et de soutien financier ?",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('name', TextType::class, [
            "label" => "Pouvez-vous nous les décrire ?",
            "row_attr" => [
                "class" => "d-none aids0"
            ]
        ])

        ->add('publicDevicesToHelpPeopleStayAtHome', ChoiceType::class, [
            "mapped" => false,
            "label" => "Y a-t-il des dispositifs publics d’aide au maintien à domicile",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('dddd', TextType::class, [
            "label" => "Pouvez-vous nous les décrire ?",
            "row_attr" => [
                "class" => "d-none aids1"
            ]
        ])

        ->add('publicPlacementDevices', ChoiceType::class, [
            "mapped" => false,
            "label" => "Y a-t-il des dispositifs publics de placements",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('dfdfdfd', TextType::class, [
            "label" => "Pouvez-vous nous les décrire ?",
            "row_attr" => [
                "class" => "d-none aids2"
            ]
        ])

        ->add("private", TextType::class, [
            "label" => "Dispositifs privés",
            "label_attr" => [
                "class" => "fs-1 text-success fw-bold ms-3"
            ],
            "attr" => [
                "class" => "d-none"
            ]
        ])

        ->add('privateSystem', ChoiceType::class, [
            "mapped" => false,
            "label" => "Y a-t-il des dispositifs privés de prise en charge des personnes âgées ?",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('privateSystemText', TextType::class, [
            "label" => "Pouvez-vous nous les décrire ?",
            "row_attr" => [
                "class" => "d-none aids3"
            ]
        ])

        ->add('ONGFondation', ChoiceType::class, [
            "mapped" => false,
            "label" => "Connaissez-vous des ONGs ou fondations locales qui interviennent dans le domaine de la
            prise en charge des personnes âgées ?",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('ONGFondationText', TextType::class, [
            "label" => "Pouvez-vous nous les décrire ?",
            "row_attr" => [
                "class" => "d-none aids3"
            ]
        ])

        ->add('insuranceMutualComplementary', ChoiceType::class, [
            "mapped" => false,
            "label" => "Existent-ils des contrats d’assurance, des mutuelles, complémentaires santé, proposés
            localement spécifiquement dédiés aux personnes âgées ?",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('insuranceMutualComplementary', TextType::class, [
            "label" => "Pouvez-vous nous les décrire ?",
            "row_attr" => [
                "class" => "d-none aids4"
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
