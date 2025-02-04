<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class VideoLinkValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint): void
    {
        if (!preg_match('/\bvimeo\b/', $value)) {
            $this->context->buildViolation($constraint->message)->addViolation();
        }
    }
}