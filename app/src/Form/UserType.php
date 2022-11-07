<?php

namespace App\Form;

use App\Entity\User;
use App\Validator\OldPassword;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('oldPassword', PasswordType::class,
                options: [
                    "required" => true,
                    "always_empty" => true,
                    "constraints" => new OldPassword()
                ]
            )
            ->add('password', PasswordType::class, options: ["required" => true, "always_empty" => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
