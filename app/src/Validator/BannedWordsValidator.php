<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class BannedWordsValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var App\Validator\BannedWords $constraint */
        $found = preg_match_all("/fuck|putain/i", $value, $matches);
        if (!$found) {
            return;
        }

        $this->context->buildViolation($constraint->message)
            ->setParameter('{{ value }}', implode(', ', array_unique($matches[0])))
            ->addViolation();

    }
}
