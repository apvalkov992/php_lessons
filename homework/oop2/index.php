<?php
class Film
{
    public $titile;

    public $duration;

    public $genre;

    public $startPeriod;

    public $endPeriod;

    public $egeLimit;

    public function __construct($titile, $duration, $genre, $startPeriod, $endPeriod, $egeLimit)
    {
        $this->titile = $titile;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->startPeriod = $startPeriod;
        $this->endPeriod = $endPeriod;
        $this->egeLimit = $egeLimit;
    }
}

class CinemaHall
{
    public $title;

    public $seatsCount;

    public function __construct($title, $seatsCount)
    {
        $this->title = $title;
        $this->seatsCount = $seatsCount;
    }

}

class Poster
{
    public $title;

    public $cinemaHall;

    public $data;

    public $startSeans;

    public $price;

    public function __construct($title, $cinemaHall, $data, $startSeans, $price)
    {
        $this->title = $title;
        $this->cinemaHall = $cinemaHall;
        $this->data = $data;
        $this->startSeans = $startSeans;
        $this->price = $price;
    }
}

class TicketWindows
{
    public $price;

    public $seat;

    public $cinemaHall;

    public $film;

    public $seans;

    public function __construct ($price,$seat,$cinemaHall,$film,$seans)
    {
        $this->price = $price;
        $this->seat = $seat;
        $this->cinemaHall = $cinemaHall;
        $this->film = $film;
        $this->seans = $seans;
    }
}

$film1 = new Film("Пила",2,"Ужасы",111,222,18);
$film2 = new Film("Пила2",2,"Ужасы",111,222,18);
$film3 = new Film("Пила3",2,"Ужасы",111,222,18);


$smol = new CinemaHall("Малый",25);
$big = new CinemaHall("Большой",55);

$poster1 = new Poster($film1->titile, $smol->title,"29.03.19","18.00", 250);
var_dump ($poster1);

$tiket1 = new TicketWindows ($poster1->price,21,$poster1->cinemaHall, $poster1->title,$poster1->startSeans);
var_dump($tiket1);

