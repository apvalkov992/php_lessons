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

    /**
     * @return DateInterval
     */
    public function getDuration(): DateInterval
    {
        return $this->duration;
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
    ){
        $this->number = $number;
        $this->price = $price;
        $this->seat = $seat;
        $this->cinemaHall = $cinemaHall;
        $this->film = $film;
        $this->start_at = $start_at;
    }


    public function getTicket(Ticket $ticket): Ticket
    {
        return $ticket ;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCinemaHall(): CinemaHall
    {
        return $this->cinemaHall;
    }


    public function getFilm(): Film
    {
        return $this->film;
    }


    public function getStartAt(): DateTime
    {
        return $this->start_at;
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

class CreateTickets
{
    private $ticket;

    private $countTickets;

    public function __construct(Ticket $ticket, int $countTickets)
    {
        $this->ticket = $ticket;

        $this->countTickets = $countTickets;
    }

    public function printTickets(): array
    {
        if ($this->countTickets > $this->ticket->getCinemaHall()->getSeatsCount() ){
            $this->countTickets = $this->ticket->getCinemaHall()->getSeatsCount();
        }

        $printTickets= [];
        for ($i=1; $i <= $this->countTickets;  $i++){
            $printTickets[$i] = new Ticket($i, $this->ticket->getPrice(), $i, $this->ticket->getCinemaHall(), $this->ticket->getFilm(), $this->ticket->getStartAt());
        }
            return $printTickets;
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



$seanceTicket = new Ticket(0, 150, 0, $blackHall,$chops,  new DateTime('+1 day'));

$createTickets = new createTickets($seanceTicket, 5 );

$printedSeanceTickets = $createTickets->printTickets();


$seance = new ScheduleItem($chops,$blackHall,$printedSeanceTickets, new DateTime('+1 day') );
echo '<pre>', '<br>','<br>';
print_r ($seance);

//$end_time = $seanceTicket->getStartAt() + $seanceTicket->getFilm()->getDuration();

//$Schedule = new Schedule ($seanceTicket->getStartAt(), $end_time);

//$addItem = $Schedule->addItem($seance );



/*

//массив билетов
for ($i=1; $i<=5;  $i++){
    $tickets[$i] = new Ticket($i, 150, $i, new CinemaHall('Черный зал', 90),new Film('Челюсти', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day')), new DateTime('+1 day'));
}
//echo '<pre>', '<br>','<br>';
//print_r ($tickets);


$seance = new ScheduleItem (new Film('Челюсти', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day')), new CinemaHall('Черный зал', 90), $tickets, new DateTime('+1 day'));
echo '<pre>', '<br>','<br>';
print_r ($seance);
*/