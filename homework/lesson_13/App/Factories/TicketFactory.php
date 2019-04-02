<?php

namespace App\Factory;


use App\Cinema\CinemaHall;
use App\Cinema\Film;
use App\Cinema\Ticket;
use DateTime;

class TicketFactory
{

    public static function generate(CinemaHall $cinemaHall, Film $film, DateTime $startAt, int $count)
    {
        $result = [];
        $seatsCount = $cinemaHall->getSeatsCount();

        while ($count > 0) {
            $result[] = new Ticket(
                $seatsCount,
                rand(100, 400),
                $seatsCount,
                $cinemaHall,
                $film,
                $startAt
            );

            $seatsCount--;
            $count--;
        }

        return $result;
    }
}