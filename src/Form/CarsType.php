<?php

namespace App\Form;

use App\Entity\Cars;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('price')
            ->add('picture')
            ->add('yearOfCirculation')
            ->add('mileage')
            ->add('model')
            ->add('carburant')
            ->add('title')
            ->add('email')
            ->add('phone number')
            ->add('firstname')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cars::class,
        ]);
    }
}
