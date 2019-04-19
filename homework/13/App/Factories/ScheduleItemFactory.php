<?php

namespace App\Factory;

use App\Cinema\CinemaHall;
use App\Cinema\Film;
use App\Cinema\ScheduleItem;

class ScheduleItemFactory
{
    /**
     * @param Film[] $films
     * @param CinemaHall[] $cinemaHalls
     * @param \DateTime $startDate
     * @param int $count
     *
     * @return array
     * @throws \Exception
     */
    public static function generate(array $films, array $cinemaHalls, \DateTime $startDate, int $count)
    {
        $result = [];
        $cloneDate = clone $startDate;

        while ($count > 0) {
            $film = $films[array_rand($films)];
            $cinemaHall = $cinemaHalls[array_rand($cinemaHalls)];
            $startDate = $cloneDate->add($film->getDuration());

            $result[] = new ScheduleItem(
                $film,
                $cinemaHall,
                TicketFactory::generate($cinemaHall, $film, $startDate, $cinemaHall->getSeatsCount()),
                $startDate
            );


            $count--;
        }

        return $result;
    }
}