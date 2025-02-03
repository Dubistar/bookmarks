<?php

namespace App\src\ApiResource\DtoTransformer;

use App\src\ApiResource\Dto\EmbedDataDtoVideoLink;
use App\src\ApiResource\Factory\EmbedDataDtoInterface;
use Embed\Embed;

class EmbedDataDtoVideoLinkTransformer implements EmbedDataDtoInterface
{
    public function context(string $context):bool
    {
        return $context === 'video';
    }

    public function getEmbedData(string $url):EmbedDataDtoVideoLink
    {
        $embed = new Embed();
        $info = $embed->get($url);

        $dtoVideoLink = new EmbedDataDtoVideoLink();
        $dtoVideoLink->setTitle($info->title);
        $dtoVideoLink->setUrl($info->url);
        $dtoVideoLink->setWidth($info->code->width);
        $dtoVideoLink->setHeight($info->code->height);
        $dtoVideoLink->setAuthor($info->authorName);
        $dtoVideoLink->setDuration($info->getOEmbed()->get('duration'));

        return $dtoVideoLink;
    }
}