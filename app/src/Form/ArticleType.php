<?php

namespace App\Form;

use App\Entity\Article;
use App\Validator\BannedWords;
use App\Validator\BannedWordsValidator;
use App\Validator\LimitContent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', options: ["required" => true])
            ->add('content', options: ["required" => true, "constraints" => [new BannedWords(), new LimitContent()]])
            ->add('picture')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
