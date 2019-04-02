<?php

namespace App\Cinema;


class TicketWindow
{

    private $user;

    private $scheduleItem;

    private $total;

    //private $ticket;
    private $tickets;
    private $countTickets;


    public function __construct(User $user, ScheduleItem $scheduleItem,int $countTickets, float $total = 0)
    {
        $this->user = $user;
        $this->scheduleItem = $scheduleItem;
        $this->total = $total;
        $this->countTickets = $countTickets;

    }


    public function buyTickets(): array
    {
        $buyTickets = [];

        $this->tickets = $this->scheduleItem->getTickets();
        //echo 'Доступные билеты  ';
        //print_r($this->tickets);
        if (count($this->tickets) < $this->countTickets)
            echo 'Не хватает билетов';
        else {
            for ($i =1; $i <= $this->countTickets;  $i++) {
                $price = $this->tickets[$i]->getPrice();
                $cash = $this->user->getCash();
                $this->total += $price ;
                if ($cash >= $price){
                    $this->user->setCash($cash - $price );
                    $buyTickets[] = $this->tickets[$i];
                }
                else {
                    echo 'Не хватет кэша ';
                }


            }
            $this->tickets = array_splice($this->tickets, $this->countTickets );
        }


        return $buyTickets;
    }


    public function getTotal(): float
    {
        return $this->total;
    }

    public function getTickets()
    {
        return $this->tickets;
    }

    public function getUser(): User
    {
        return $this->user;
    }

}
