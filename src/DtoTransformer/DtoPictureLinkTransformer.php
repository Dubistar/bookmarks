<?php

namespace App\DtoTransformer;

use App\Dto\DtoPictureLink;
use App\Factory\EmbedDataInterface;
use Embed\Embed;

class DtoPictureLinkTransformer implements EmbedDataInterface
{
    public function getEmbedData(string $url):DtoPictureLink
    {
        $embed = new Embed();
        $info = $embed->get($url);

        $dtoPictureLink = new DtoPictureLink();
        $dtoPictureLink->setTitle($info->title);
        $dtoPictureLink->setUrl($info->url);
        $dtoPictureLink->setWidth($info->code->width);
        $dtoPictureLink->setHeight($info->code->height);
        $dtoPictureLink->setAuthor($info->authorName);

        return $dtoPictureLink;
    }
}