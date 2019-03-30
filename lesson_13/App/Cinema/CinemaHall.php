<?php

namespace App\Cinema;

class CinemaHall
{
    private $title;

    private $seatsCount;

    public function __construct(string $title, int $seatsCount)
    {
        $this->title = $title;
        $this->seatsCount = $seatsCount;
    }

    public function getSeatsCount()
    {
        return $this->seatsCount;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}