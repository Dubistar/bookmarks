<?php

namespace App\Dto;

class EmbedDataDtoVideoLink extends AbstractDtoBaseLink
{
    private ?int $duration;

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }

}