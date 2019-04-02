<?php

namespace App\Factory;

use App\Cinema\Schedule;
use DateTime;
use DateInterval;
use DatePeriod;

class ScheduleFactory
{
    public static function generate(array $films, array $cinemaHalls)
    {
        $period = (new self())->getPeriod();
        $result = [];

        foreach($period as $date){
            $result[] = new Schedule(
                $date,
                (clone $date)->add(new DateInterval('P6D')),
                ScheduleItemFactory::generate($films, $cinemaHalls, $date, rand(1, 10))
            );
        }

        return $result;
    }

    public function getPeriod()
    {
        $firstMonday = new DateTime('first monday' . date('Y-m'));
        $lastDay = new DateTime('last day of this month');
        $interval = new DateInterval('P7D');

        return new DatePeriod($firstMonday, $interval, $lastDay);
    }
}