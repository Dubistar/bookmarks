<?php

namespace App\DtoTransformer;

use App\Dto\DtoVideoLink;
use App\Factory\EmbedDataInterface;
use Embed\Embed;

class DtoVideoLinkTransformer implements EmbedDataInterface
{
    public function getEmbedData(string $url):DtoVideoLink
    {
        $embed = new Embed();
        $info = $embed->get($url);

        $dtoVideoLink = new DtoVideoLink();
        $dtoVideoLink->setTitle($info->title);
        $dtoVideoLink->setUrl($info->url);
        $dtoVideoLink->setWidth($info->code->width);
        $dtoVideoLink->setHeight($info->code->height);
        $dtoVideoLink->setAuthor($info->authorName);
        $dtoVideoLink->setDuration($info->getOEmbed()->get('duration'));

        return $dtoVideoLink;
    }
}