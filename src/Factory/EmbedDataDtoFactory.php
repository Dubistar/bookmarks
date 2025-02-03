<?php

namespace App\Factory;

use App\DtoTransformer\EmbedDataDtoPictureLinkTransformer;
use App\DtoTransformer\EmbedDataDtoVideoLinkTransformer;
use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;

class EmbedDataDtoFactory
{

    public function __construct(
        #[AutowireIterator(EmbedDataDtoInterface::CONTEXT)]private readonly iterable $embedDataTransformers
    )
    {
    }

    public function getTransformer(string $context): ?EmbedDataDtoInterface
    {
        foreach ($this->embedDataTransformers as $embedDataTransformer){
            if($embedDataTransformer->context($context)){
                return $embedDataTransformer;
            }
        }
        return null;
    }
}