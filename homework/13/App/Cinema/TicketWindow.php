<?php

namespace App\Cinema;

use DateTime;

class TicketWindow
{
    private $user;

    private $schedule;

    private $total;

    public function __construct(User $user, Schedule $schedule, float $total = 0)
    {
        $this->user = $user;
        $this->schedule = $schedule;
        $this->total = $total;
    }

    public function getUser() {
        return $this->user;
    }

    public function getSchedule() {
        return $this->schedule;
    }

    public function getTotal() {
        return $this->total;
    }

}