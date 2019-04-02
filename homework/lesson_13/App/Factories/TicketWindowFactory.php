<?php
/**
 * Created by PhpStorm.
 * User: cay
 * Date: 31.03.2019
 * Time: 11:19
 */

namespace App\Factory;
use App\Cinema\Schedule;
use App\Cinema\ScheduleItem;
use App\Cinema\TicketWindow;


class TicketWindowFactory
{
    public static function generate(array $users, array $schedules,int $countTickets): array
    {
        $result = [];
        echo '<pre>';
        foreach ($schedules as $schedule){
            foreach ($schedule->getItems() as $item) {
                print_r($users);
                //print_r($item);
                foreach ($users as $user) {
                    $result[] = (new TicketWindow($user, $item, $countTickets))->buyTickets();
                }
            }
        }

        return $result;
    }

}

