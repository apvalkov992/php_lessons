<?php

// User, CinemaHall, Film, Ticket, Schedule, TicketWindow

class User
{
    private $age;

    private $cash;

    public function __construct(int $age, float $cash)
    {
        $this->age = $age;
        $this->cash = $cash;
    }
}

class Film
{
    private $title;

    private $duration;

    private $genre;

    private $language;

    private $startPremier;

    private $endPremier;

    private $ageLimit;

    public function __construct(
        string $title,
        DateInterval $duration,
        string $genre,
        DateTime $startPremier,
        DateTime $endPremier,
        int $ageLimit = 0,
        string $language = 'Ru'
    ) {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->startPremier = $startPremier;
        $this->endPremier = $endPremier;
        $this->ageLimit = $ageLimit;
        $this->language = $language;
    }
}

class CinemaHall
{
    private $title;

    private $seatsCount;

    public function __construct(string $title, int $seatsCount)
    {
        $this->title = $title;
        $this->seatsCount = $seatsCount;
    }
}

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
}

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
}

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
}

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
}

// Пользователи

$vasya = new User(23, 1000);
$petya = new User(25, 500);
$jhon = new User(18, 4000);

//Фильмы

$chops = new Film('Челюсти', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'));
$chops2 = new Film('Челюсти 2', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'));
$chops3 = new Film('Челюсти 3', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'));
$chops4 = new Film('Челюсти 4', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'));

$redHall = new CinemaHall('Красный зал', 120);
$greenHall = new CinemaHall('Зелёный зал', 90);
$blackHall = new CinemaHall('Черный зал', 90);




