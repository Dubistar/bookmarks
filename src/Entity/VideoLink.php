<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ApiResource]
#[ORM\HasLifecycleCallbacks]
class VideoLink extends BaseLink
{
    #[ORM\Column(length: 255)]
    private ?int $width = null;

    #[ORM\Column(length: 255)]
    private ?int $height = null;

    #[ORM\Column(length: 255)]
    private ?int $duration = null;

    #[\App\Validator\Constraints\VideoLink]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $url = null;

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;

        return $this;
    }
    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }
}
