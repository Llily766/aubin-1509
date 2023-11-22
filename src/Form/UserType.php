<?php

namespace App\Form;

use App\Entity\Boss;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('string')
            ->add('emails')
            ->add('employee')
            ->add('passwords')
            ->add('visitors')
            ->add('firstname')
            ->add('phone number')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Boss::class,
        ]);
    }
}
