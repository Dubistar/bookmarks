<?php

namespace App\Service;

use Embed\Embed;

class DataEmbedService
{


    public function getData(string $url)
    {
        return (new Embed())->get($url);
    }
}