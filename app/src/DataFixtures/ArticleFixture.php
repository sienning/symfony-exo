<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ArticleFixture extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setUsername('user_1');
        $user1->setEmail('lenitatralala@gmail.com');
        $user1->setPassword($this->passwordHasher->hashPassword($user1, 'the_new_password'));
        $user1->setRoles(['ROLE_USER']);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setUsername('user_2');
        $user2->setEmail('mymail@hotmail.fr');

        $user2->setPassword($this->passwordHasher->hashPassword($user2, 'the_new_password'));
        $user2->setRoles(['ROLE_USER']);
        $manager->persist($user2);

        $user1->setApiToken('token_1');

        $user2->setApiToken('token_2');

        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle($faker->sentence());
            $article->setPicture("https://media.istockphoto.com/photos/black-dog-looking-over-a-fence-picture-id537186415?k=6&m=537186415&s=170667a&w=0&h=kbgzBibUXJgTo-KxgiWbgCAVKnavERntBLrNUWQ83Ns=");
            $article->setCreatedAt(new \DateTimeImmutable());
            $article->setUpdatedAt(new \DateTimeImmutable());
            $article->setContent($faker->text(1500));
            $article->setAuthor( $i % 2 === 0 ? $user2 : $user1);

            for ($j = 0; $j < 3; $j++) {
                $comment = new Comment();
                $comment->setUpdatedAt(new \DateTimeImmutable());
                $comment->setCreatedAt(new \DateTimeImmutable());
                $comment->setUsername($faker->userName());
                $comment->setContent($faker->text(100));
                $article->addComment($comment);
                $manager->persist($comment);
            }

            $manager->persist($article);
        }

        $manager->flush();
    }
}
