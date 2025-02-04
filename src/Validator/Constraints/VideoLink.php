<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class VideoLink extends Constraint
{
    public string $message = 'Vous devez transmettre un lien vimeo';
}