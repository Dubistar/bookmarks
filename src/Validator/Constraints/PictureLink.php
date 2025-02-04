<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class PictureLink extends Constraint
{
    public string $message = 'Vous devez transmettre un lien flickr';
}