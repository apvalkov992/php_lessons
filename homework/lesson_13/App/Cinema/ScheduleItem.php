<?php

namespace App\Cinema;

use DateTime;

class ScheduleItem
{
    private $film;

    private $cinemaHall;

    private $tickets;

    private $start_at;

    public function __construct(Film $film, CinemaHall $cinemaHall, array $tickets, DateTime $start_at)
    {
        $this->film = $film;
        $this->cinemaHall = $cinemaHall;
        $this->tickets = $tickets;
        $this->start_at = $start_at;
    }

    /**
     * @return Film
     */
    public function getFilm(): Film
    {
        return $this->film;
    }

    /**
     * @return CinemaHall
     */
    public function getCinemaHall(): CinemaHall
    {
        return $this->cinemaHall;
    }

    /**
     * @return array
     */
    public function getTickets(): array
    {
        return $this->tickets;
    }

    /**
     * @return DateTime
     */
    public function getStartAt(): DateTime
    {
        return $this->start_at;
    }
}