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

    public function buyTicket($price)
    {
        if (($this->cash - $price) >= 0) {
            $this->cash - $price;
        } else {
            echo "Нема денег, вали отсюда бомж";
        }

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
    )
    {
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

    public function getSeatsCount(): int
    {
        return $this->seatsCount;
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
    )
    {
        $this->number = $number;
        $this->price = $price;
        $this->seat = $seat;
        $this->cinemaHall = $cinemaHall;
        $this->film = $film;
        $this->start_at = $start_at;
    }

    /**
     * @return CinemaHall
     */
    public function getCinemaHall(): CinemaHall
    {
        return $this->cinemaHall;
    }

    /**
     * @return Film
     */
    public function getFilm(): Film
    {
        return $this->film;
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

    public function printSchedule()
    {
        foreach ($this->items as $item) {
            var_dump($item);
        }
    }
}

class ScheduleItem
{
    private $film;

    private $cinemaHall;

    private $start_at;

    public function __construct(Film $film, CinemaHall $cinemaHall, DateTime $start_at)
    {
        $this->film = $film;
        $this->cinemaHall = $cinemaHall;
        $this->start_at = $start_at;
    }
}

class TicketWindow
{
    private $user;

    private $tickets;

    private $total;

    public function __construct(User $user, array $tickets, float $total = 0)
    {
        $this->user = $user;
        $this->total = $total;
        $this->tickets = $tickets;
    }

    public function sellTicket()
    {
        if (count($this->tickets) > 0) {
            $this->user->buyTicket($this->ticketPrice);
            $this->total + $this->ticketPrice;
        } else {
            echo "Билетов нет";
        }

    }
}

class TicketCreator
{
    private $cinemaHall;

    private $film;

    private $count;

    public function __construct(CinemaHall $cinemaHall, Film $film, $count)
    {
        $this->cinemaHall = $cinemaHall;
        $this->film = $film;
        $this->count = $count;
    }

    public function createTickets()
    {
        $tickets = [];
        $count = $this->count;
        $number = 1;
        $seatsCount = $this->cinemaHall->getSeatsCount();
        if ($count > $seatsCount) {
            echo "Вы пытаетесь создать больше билетов, чем вмещяет зал";
            return;
        } else {
            for ($i = 0; $i <= $count; $i++) {
                $tickets[$i] = new Ticket($number, 189.5, $number, $this->cinemaHall, $this->film, new DateTime('2008-01-01'));
                $number++;
            }
        }

        return $tickets;
    }
}

// Пользователи

$vasya = new User(23, 1000);
$petya = new User(25, 500);
$jhon = new User(18, 4000);

$vasya->buyTicket(200);

//Фильмы

$chops = new Film('Челюсти', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'), new DateTime('+1 day'));
$chops2 = new Film('Челюсти 2', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'), new DateTime('+1 day'));
$chops3 = new Film('Челюсти 3', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'), new DateTime('+1 day'));
$chops4 = new Film('Челюсти 4', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'), new DateTime('+1 day'));

$redHall = new CinemaHall('Красный зал', 120);
$greenHall = new CinemaHall('Зелёный зал', 90);
$blackHall = new CinemaHall('Черный зал', 90);

$ticketsCreator = new TicketCreator($redHall, $chops, 5);
$ticketsForChops[] = $ticketsCreator->createTickets();

$sessionOnChops = new ScheduleItem($chops, $redHall, new DateTime('2019-01-01'));
$sessionOnChops2 = new ScheduleItem($chops2, $redHall, new DateTime('2019-01-01'));

$Schedule = new Schedule(new DateTime('2019-01-01'), new DateTime('2019-01-01'));
$Schedule->addItem($sessionOnChops);
$Schedule->addItem($sessionOnChops2);

$Schedule->printSchedule();


$TicketWindow = new TicketWindow($vasya, $ticketsCreator->createTickets());


echo "<pre>";
//print_r($TicketWindow);
$Schedule->printSchedule();




