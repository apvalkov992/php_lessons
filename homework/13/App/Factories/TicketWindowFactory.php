<?php
    
namespace App\Factory;

use App\Cinema\TicketWindow;
use DateTime;
use DateInterval;

class TicketWindowFactory {

    public static function generate(array $users, array $schedules, int $count ) {
        $result = [];


        while ($count > 0) { 
            $total = rand(0,10000);
            $user = $users[array_rand($users)];
            $schedule = $schedules[array_rand($schedules)];
            
            $result[] = new TicketWindow(
                $user,
                $schedule,
                $total
            );

            $count--;
        }
        return $result;
    }
}