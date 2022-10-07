<?php

namespace App\Form\Survey;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class HospitalsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('geriatricDepartment', TextType::class, [
            "label" => "Y a-t-il des hôpitaux qui disposent localement d’un service gériatrique dédié ?"
        ])
        ->add('institution', TextType::class, [
            "label" => "Existe-t-il localement d’autres types d’institution de prise en charge médicale des personnes
            âgées ?"
        ])
        ->add('hostDayPlacement', TextType::class, [
            "label" => "Existe-t-il localement des organismes d’accueil de jour des personnes âgées ?"
        ])    
        ->add('temporaryPlacement', TextType::class, [
            "label" => "Existe-t-il localement des organismes de placement (temporaire ou permanent) des
            personnes âgées ?"
        ])  
        ->add('dementingSyndromes', TextType::class, [
            "label" => "Existe-t-il localement des organismes de prise en charge de personnes âgées avec des
            syndromes démentiels ou des pathologies du type Alzheimer ?"
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
