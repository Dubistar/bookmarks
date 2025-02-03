<?php

namespace App\src\ApiResource\DtoTransformer;

use App\src\ApiResource\Dto\EmbedDataDtoPictureLink;
use App\src\ApiResource\Factory\EmbedDataDtoInterface;
use Embed\Embed;

class EmbedDataDtoPictureLinkTransformer implements EmbedDataDtoInterface
{
    public function context(string $context):bool
    {
        return $context === 'picture';
    }
    public function getEmbedData(string $url):EmbedDataDtoPictureLink
    {
        $embed = new Embed();
        $info = $embed->get($url);

        $dtoPictureLink = new EmbedDataDtoPictureLink();
        $dtoPictureLink->setTitle($info->title);
        $dtoPictureLink->setUrl($info->url);
        $dtoPictureLink->setWidth($info->code->width);
        $dtoPictureLink->setHeight($info->code->height);
        $dtoPictureLink->setAuthor($info->authorName);

        return $dtoPictureLink;
    }
}