<?php

namespace App\Factory;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag]
interface EmbedDataInterface
{
    public function getEmbedData(string $url);
}