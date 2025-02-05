<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class VideoLinkValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$constraint instanceof VideoLink) {
            throw new \InvalidArgumentException(sprintf('%s ne peut valider que %s', self::class, VideoLink::class));
        }

        if (!preg_match('/\bvimeo\b/', $value)) {
            $this->context->buildViolation($constraint->message)->addViolation();
        }
    }
}