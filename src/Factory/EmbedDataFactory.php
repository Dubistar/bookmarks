<?php

namespace App\Factory;

use App\DtoTransformer\DtoPictureLinkTransformer;
use App\DtoTransformer\DtoVideoLinkTransformer;

class EmbedDataFactory
{
    public static function getTransformer(string $context): EmbedDataInterface
    {
        return match ($context) {
            'picture' => new DtoPictureLinkTransformer(),
            'video' => new DtoVideoLinkTransformer()
        };
    }
}