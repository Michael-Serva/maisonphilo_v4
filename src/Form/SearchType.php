<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Category;
use App\Entity\CustomerService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('q', TextType::class, [
                'required' => false,
                'label' => 'Rechercher',
                'row_attr' => ['class' => 'form-floating py-1'],
                'attr' => [
                    "placeholder" => 'Rechercher',
                    'class' => 'form-control'
                ]
            ])
            ->add('categories', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Category::class,
                'expanded' => true,
                'multiple' => true

            ])
            ->add('min', NumberType::class, [
                'label' => false,
                'required' => false,
                'row_attr' => [
                    'class' => 'form-floating'
                ],
                'attr' => [
                    'label' => 'Prix minimum',
                    'placeholder' => 'Prix minimum',
                    'class' => 'form-control'
                ]
            ])
            ->add('max', NumberType::class, [
                'label' => false,
                'required' => false,
                'row_attr' => [
                    'class' => 'form-floating'
                ],
                'attr' => [
                    'label' => 'Prix maximum',
                    'placeholder' => 'Prix maximum',
                    'class' => 'form-control'
                ]
            ])
            ->add('Valider', ResetType::class, [
                'label' => 'Réinitialisation',
                'row_attr' => [
                    'class' => 'd-grid gap-2'
                ],
                'attr' => [
                    'class' => 'btn btn-success btn-lg'
                ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
