<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClothesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adress', TextType::class, [
                "label" => "Avez-vous des adresses où l'on peut acheter/louer localement les articles suivants?"
            ])
            ->add('market', ChoiceType::class, [
                "mapped" => false,
                "label" => "Connaissez-vous des commerçants intervenant dans ce domaine?",
                "placeholder" => null,
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                    'Je ne sais pas' => null,
                ]
            ])
            ->add('name', TextType::class, [
                "label" => "Pouvez-vous nous fournir leur nom, spécialités et contacts?",
                "row_attr" => [
                    "class" => "d-none clothes"
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
