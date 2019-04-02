<?php

namespace App\Cinema;

use DateTime;

class Schedule
{
    private $start_at;

    private $end_at;

    private $items;

    public function __construct(DateTime $start_at, DateTime $end_at, array $items = [])
    {
        $this->start_at = $start_at;
        $this->end_at = $end_at;
        $this->items = $items;
    }

    public function addItem(ScheduleItem $scheduleItem)
    {
        $this->items[] = $scheduleItem;
    }

    /**
     * @return DateTime
     */
    public function getStartAt(): DateTime
    {
        return $this->start_at;
    }

    /**
     * @return DateTime
     */
    public function getEndAt(): DateTime
    {
        return $this->end_at;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}