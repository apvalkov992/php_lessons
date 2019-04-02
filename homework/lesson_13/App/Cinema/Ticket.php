<?php

namespace App\Cinema;

use DateTime;

class Ticket
{
    private $number;

    private $price;

    private $seat;

    private $cinemaHall;

    private $film;

    private $start_at;

    public function __construct(
        int $number,
        float $price,
        int $seat,
        CinemaHall $cinemaHall,
        Film $film,
        DateTime $start_at
    ){
        $this->number = $number;
        $this->price = $price;
        $this->seat = $seat;
        $this->cinemaHall = $cinemaHall;
        $this->film = $film;
        $this->start_at = $start_at;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getSeat(): int
    {
        return $this->seat;
    }

    /**
     * @return CinemaHall
     */
    public function getCinemaHall(): CinemaHall
    {
        return $this->cinemaHall;
    }

    /**
     * @return Film
     */
    public function getFilm(): Film
    {
        return $this->film;
    }

    /**
     * @return DateTime
     */
    public function getStartAt(): DateTime
    {
        return $this->start_at;
    }
}