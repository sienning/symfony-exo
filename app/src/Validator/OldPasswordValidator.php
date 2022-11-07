<?php

namespace App\Validator;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class OldPasswordValidator extends ConstraintValidator
{
    private UserPasswordHasherInterface $passwordHasher;
    private Security $user;

    public function __construct(UserPasswordHasherInterface $passwordHasher, Security $user)
    {
        $this->passwordHasher = $passwordHasher;
        $this->user = $user;
    }
    public function validate($value, Constraint $constraint)
    {
        /* @var App\Validator\OldPassword $constraint */
        if ($this->passwordHasher->isPasswordValid($this->user->getUser(), $value)) {
            return;
        }

        $this->context->buildViolation($constraint->message)
            ->addViolation();

    }
}
