<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\HasLifecycleCallbacks]
#[ApiResource]
class PictureLink extends BaseLink
{
    #[ORM\Column(length: 255)]
    private ?int $width = null;

    #[ORM\Column(length: 255)]
    private ?int $height = null;


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

}
