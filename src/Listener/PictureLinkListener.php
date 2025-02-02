<?php

namespace App\Listener;

use App\Entity\PictureLink;
use App\Factory\EmbedDataFactory;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

#[AsEntityListener(event: Events::prePersist, entity: PictureLink::class)]
class PictureLinkListener
{
    const string CONTEXT = 'picture';
    public function __construct(
        private SerializerInterface $serializer
    )
    {
    }

    public function prePersist(PictureLink $pictureLink, LifecycleEventArgs $eventArgs):void
    {
        $transformer = EmbedDataFactory::getTransformer(self::CONTEXT);
        $embedData = $transformer->getEmbedData($pictureLink->getUrl());

        $jsonEmbedData = $this->serializer->serialize($embedData,'json');

         $this->serializer->deserialize($jsonEmbedData, PictureLink::class, 'json', [
            AbstractNormalizer::OBJECT_TO_POPULATE => $pictureLink
        ]);

    }
}