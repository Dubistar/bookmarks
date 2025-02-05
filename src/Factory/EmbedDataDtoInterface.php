<?php

namespace App\Factory;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag(self::CONTEXT)]
interface EmbedDataDtoInterface
{
    const string CONTEXT = 'embed.data';
    public function context(string $context):bool;
    public function getEmbedData(string $url):mixed;
}