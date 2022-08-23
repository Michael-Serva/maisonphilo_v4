<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AidsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('publicAssistanceFinancialSupport', ChoiceType::class, [
            "label" => "Y a-t-il des dispositifs publics d’assistance et de soutien financier ?",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('name', TextType::class, [
            "label" => "Pouvez-vous nous fournir leur nom, spécialité et contacts ?",
            "row_attr" => [
                "class" => "d-none aids0"
            ]
        ])

        ->add('publicDevicesToHelpPeopleStayAtHome', ChoiceType::class, [
            "label" => "Y a-t-il des dispositifs publics d’aide au maintien à domicile",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('dddd', TextType::class, [
            "label" => "Pouvez-vous nous fournir leur nom, spécialité et contacts ?",
            "row_attr" => [
                "class" => "d-none aids1"
            ]
        ])

        ->add('publicPlacementDevices', ChoiceType::class, [
            "label" => "Y a-t-il des dispositifs publics de placements",
            "placeholder" => null,
            'choices'  => [
                'Oui' => true,
                'Non' => false,
                'Je ne sais pas' => null,
            ],
        ])

        ->add('dfdfdfd', TextType::class, [
            "label" => "Pouvez-vous nous fournir leur nom, spécialité et contacts ?",
            "row_attr" => [
                "class" => "d-none aids2"
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
