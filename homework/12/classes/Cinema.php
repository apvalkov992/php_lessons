<?php

// User, CinemaHall, Film, Ticket, Schedule, TicketWindow

class User
{
    private $age;

    private $cash;

    private $tickets;

    public function __construct(int $age, float $cash)
    {
        $this->age = $age;
        $this->cash = $cash;
    }

    public function addTicket(Ticket $ticket) {
        if (($this->cash - $ticket->showPrice()) < 0) {
            echo 'Вам не хватает '.abs($this->cash - $ticket->showPrice()).' тугриков на билет'.'<br>';
        }
        else {
            $this->tickets[] = $ticket;
            $this->cash -=  $ticket->showPrice();
        }
    }

    public function showTickets() {
        if ($this->tickets) {
            foreach ($this->tickets as $ticket) {
                $ticket->showInfo();
            }
        }
        else {
            echo 'Билетов нет'.'<br>';
        }
    }

    public function showCash() {
        echo 'У вас на счету: '.$this->cash.' тугриков'.'<br>';
    }

    public function showAge() {
        return $this->age;
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

    public function showTitle() : string {
        return $this->title;
    }

    public function moreDetails() : array { // Инфо о фильме
        return [
            $this->title,
            $this->duration,
            $this->genre,
            $this->startPremier,
            $this->endPremier,
            $this->ageLimit,
            $this->language
        ];
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

    public function showTitle() : string {
        return $this->title;
    }

    public function showSeatsCount() : int {
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

    public function showInfo() {
        echo '№: '.$this->number.'<br>';
        echo 'Фильм: '.$this->film->showTitle().'<br>';
        echo 'Место: '.$this->seat.'<br>';
        echo 'Зал: '.$this->cinemaHall->showTitle().'<br>';
        echo 'Начало: '.$this->start_at->format('d.m.Y H:i').'<br>';
        echo 'Цена: '.$this->price.'<br>';
    }

    public function showPrice() {
        return $this->price;
    }
}

class Schedule
{
    private $start_at; // Дата начала расписания

    private $end_at; // Расписание окончание

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

    public function show() {
        echo 'Дата начала показа: '.$this->start_at->format('d.m.Y H:i').'<br>';
        echo 'Дата завершения показа: '.$this->start_at->format('d.m.Y H:i').'<br>';

        foreach ($items as $item) {
            $item->show();
        }
    }

    public function returnItems() {
        return $this->items;
    }

}

class ScheduleItem
{
    private $film;

    private $cinemaHall;

    private $tickets;

    private $start_at; // Начало фильма

    public function __construct(Film $film, CinemaHall $cinemaHall, array $tickets, DateTime $start_at)
    {
        $this->film = $film;
        $this->cinemaHall = $cinemaHall;
        $this->tickets = $tickets;
        $this->start_at = $start_at;
    }

    public function show() { // Дописать детали фильма 
        echo '';
        echo 'Начало фильма: '.$this->start_at->format('d.m.Y H:i').'<br>';
    }

    public function returnTickets() {
        return $this->tickets;
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

    public function returnShedule() {
        return $this->schedule;
    }
}

class CalculateTotal {

    private $ticketWindow;

    private $total;

    public function __construct(TicketWindow $ticketWindow) {
        $this->ticketWindow = $ticketWindow;
    }   

    public function showTotalTicketWindow() {
        if ($this->ticketWindow) {
            echo '<pre>';
            foreach ($this->ticketWindow->returnShedule()->returnItems() as $value) {
                echo '1';
            }
            //var_dump($this->ticketWindow->returnShedule()->returnItems());
            echo '</pre>';
        }
        else {
            echo 'Данная касса не существует'.'<br>';
        }
    }
}

// Пользователи

$vasya = new User(23, 1000);
$petya = new User(25, 500);
$oleg = new User(15, 50);
$jhon = new User(18, 4000);

//Фильмы

$chops = new Film('Челюсти', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'), 18);
$chops2 = new Film('Челюсти 2', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'), 18);
$chops3 = new Film('Челюсти 3', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'), 18);
$chops4 = new Film('Челюсти 4', new DateInterval('PT90M'), 'ужасы', new DateTime('-1 day'),  new DateTime('+1 day'), 18);
$myltafki = new Film('Мультяфки', new DateInterval('PT90M'), 'мультфильм', new DateTime('-1 day'),  new DateTime('+1 day'));
$myltafki2 = new Film('Мультяфки 2', new DateInterval('PT90M'), 'мультфильм', new DateTime('-1 day'),  new DateTime('+1 day'));

$redHall = new CinemaHall('Красный зал', 120);
$greenHall = new CinemaHall('Зелёный зал', 90);
$blackHall = new CinemaHall('Черный зал', 90);


// Билеты
$ticket1 = new Ticket(1,99.9,30, $redHall, $chops,new DateTime('2019-03-30 9:10'));
$ticket2 = new Ticket(2,99.9,31, $redHall, $chops,new DateTime('2019-03-30 9:10'));

$ticket3 = new Ticket(1,75,15, $greenHall, $myltafki,new DateTime('2019-03-31 15:00'));
$ticket4 = new Ticket(2,75,16, $greenHall, $myltafki,new DateTime('2019-03-31 15:00'));
$ticket5 = new Ticket(3,75,20, $greenHall, $myltafki,new DateTime('2019-03-31 15:00'));

$ticket6 = new Ticket(1,99.9,48, $blackHall, $chops2,new DateTime('2019-03-30 21:00'));
$ticket7 = new Ticket(2,99.9,73, $blackHall, $chops2,new DateTime('2019-03-30 21:00'));


// Расписания
$scheduleItem1 = new ScheduleItem($myltafki,$greenHall,[$ticket3,$ticket4,$ticket5],new DateTime('2019-03-31 15:00'));
$scheduleItem2 = new ScheduleItem($chops2,$blackHall,[$ticket6,$ticket7],new DateTime('2019-03-30 21:00'));

$schedule1 = new Schedule(new DateTime('2019-03-30 00:00'),new DateTime('2019-03-31 23:59'),[$chops,$redHall,[$ticket1,$ticket2],new DateTime('2019-03-30 9:10')]);
$schedule2 = new Schedule(new DateTime('2019-03-25 00:00'),new DateTime('2019-03-31 23:59'));
$schedule2->addItem($scheduleItem1);
$schedule3 = new Schedule(new DateTime('2019-04-06 00:00'),new DateTime('2019-04-07 23:59'));
$schedule3->addItem($scheduleItem2);

// Кассы
$ticketWindow = new TicketWindow($jhon, $schedule1, 4000);
$ticketWindow2 = new TicketWindow($jhon, $schedule2);
$ticketWindow2 = new TicketWindow($jhon, $schedule3);



$vasya->addTicket($ticket1);
$vasya->addTicket($ticket2);
$vasya->showTickets();
$vasya->showCash();
echo '------------------------'.'<br>';
$oleg->addTicket($ticket3);
$oleg->showTickets();
$oleg->showCash();
echo '------------------------'.'<br>';

$totalTicketWIndow = new CalculateTotal($ticketWindow);
$totalTicketWIndow->showTotalTicketWindow();