<?php

namespace App\Factory;

use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;

readonly class EmbedDataDtoFactory
{

    public function __construct(
        #[AutowireIterator(EmbedDataDtoInterface::CONTEXT)]private iterable $embedDataTransformers
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