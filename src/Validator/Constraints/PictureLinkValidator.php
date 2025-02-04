<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class PictureLinkValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint): void
    {
        if (!preg_match('/\bflickr\b/', $value)) {
            $this->context->buildViolation($constraint->message)->addViolation();
        }
    }
}