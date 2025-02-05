<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class PictureLinkValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$constraint instanceof PictureLink) {
            throw new \InvalidArgumentException(sprintf('%s ne peut valider que %s', self::class, PictureLink::class));
        }

        if (!preg_match('/\bflickr\b/', $value)) {
            $this->context->buildViolation(message: $constraint->message)->addViolation();
        }
    }
}