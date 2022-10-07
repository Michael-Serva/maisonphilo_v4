<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SpecialistsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('professionals', ChoiceType::class, [
                "mapped" => false,
                "label" => "Connaissez-vous des professionnels intervenant dans ce domaine ?",
                "placeholder" => null,
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                    'Je ne sais pas' => null,
                ]
                
            ])
            ->add('name', TextType::class, [
                "label" => "Pouvez-vous nous fournir leur nom, spécialité et contacts ?",
                "row_attr" => [
                    "class" => "d-none specialists"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
