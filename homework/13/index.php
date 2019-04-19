<?php

require __DIR__.'/vendor/autoload.php';

use App\Factory\UserFactory;
use App\Factory\FilmFactory;
use \App\Factory\CinemaHallsFactory;
use App\Factory\ScheduleFactory;
use App\Factory\TicketWindowFactory;

$users = UserFactory::generate(100);
$films = FilmFactory::generate();
$cinemaHalls = CinemaHallsFactory::generate();
$schedules = ScheduleFactory::generate($films, $cinemaHalls);
$ticketWindows = TicketWindowFactory::generate($users,$schedules,30);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid mb-2">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">WebDevelopmentCourse</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>Пользовательская наличка</th>
                    <th>Расписание</th>
                    <th>Наличка кассы</th>
                </thead>
                <tbody>
                    <?php foreach($ticketWindows as $ticketWindow): ?>
                    <?php 
/*                        $randomItem = $ticketWindow->getSchedule()->getItems()[array_rand($ticketWindow->getSchedule()->getItems())];
                        print_r($randomItem);echo '<br>';
                        $randomTicket = $ticketWindow->getSchedule()->getItems()[$randomItem]->getTickets()[array_rand()];*/
                    ?>
                    <tr>
                        <td><?= $ticketWindow->getUser()->getCash(); ?></td>
                        <td><!-- < ?= $ticketWindow->getSchedule()->getItems()[$randomItem]->getTickets()[$randomTicket]->getPrice();?> --></td>
                        <td><?= $ticketWindow->getTotal(); ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <th>Дата</th>
                    <th>Фильм</th>
                    <th>Зал</th>
                    <th>Количество билетов</th>
                </thead>

                <tbody>

                     <?php foreach ($schedules as $schedule):?>

                        <?php foreach ($schedule->getItems() as $item): ?>

                            <tr>
                                <td>
                                    <?= $item->getStartAt()->format('d.m')?>
                                </td>
                                <td>
                                    <?= $item->getFilm()->getTitle()?>
                                </td>
                                <td>
                                    <?= $item->getCinemaHall()->getTitle()?>
                                </td>
                                <td>
                                    <?= count($item->getTickets())?>
                                </td>
                            </tr>

                        <?php endforeach;?>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
