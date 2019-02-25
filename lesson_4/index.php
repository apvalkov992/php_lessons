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
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">WebDevelopmentCourse</a>
            </nav>
        </div>

    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success">

                <?php
                $config = require_once 'config/config.php';

                //                        0  1  2  3  4  5  6  7  8  9
                $a = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];


                /*for ($i = 0; $i <= 10; $i++) {
                    echo $i . '=';
                    echo nl2br($a[$i] . PHP_EOL);
                }

                echo "<hr>";
                $i = 0;

                while ($i <= 10) {
                    echo $i . '=';
                    echo nl2br($a[$i] . PHP_EOL);
                    $i++;
                }

                echo "<hr>";

                $i = 0;
                do {
                    echo $i . '=';
                    echo nl2br($a[$i] . PHP_EOL);
                    $i++;
                } while($i <= 10);*/


                echo '<pre>';

                $total = 12000;
                //                                0      1      2       3      4       5
                $animals = ['dog', 'cat', 'rat', 'lion', 'pig', 'rabbit'];

                $cage = null;

                foreach ($animals as $key => $animal) {
                    $cage = $key;

                    if ($animal === 'rat') {
                        break;
                    }

                    echo nl2br($animal . PHP_EOL);
                }

                //                    var_dump($cage);

                $cars = [
                    [
                        'mark' => 'BMW',
                        'model' => 'X5',
                        'number' => 421451
                    ],
                    [
                        'mark' => 'Mercedes',
                        'model' => 'e200',
                        'number' => 421545
                    ],
                    [
                        'mark' => 'Opel',
                        'model' => 'Astra',
                        'number' => 45454
                    ]
                ];

                ?>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Марка</th>
                    <th>Модель</th>
                    <th>Номер</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cars as $car) :?>
                    <tr>
                        <td><?= $car['mark']?></td>
                        <td><?= $car['model']?></td>
                        <td><?= $car['number']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>

            </table>

            <?php
            $list = ['green', 'yellow', 'red', 'white', 'black']
            ?>

            <ul class="list-group">
                <?php foreach ($list as $item) : ?>

                    <li class="list-group-item"><?= $item?></li>

                <?php endforeach;?>
            </ul>

            <?php

            $posts = [
                [
                    'title' => 'Пост',
                    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
                    'img' => 'http://lorempixel.com/400/200'
                ],
                [
                    'title' => 'Почему он используется?',
                    'description' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
                    'img' => 'http://lorempixel.com/400/200/sports'
                ]
            ];
            ?>

            <div class="row">
                <?php foreach ($posts as $post) :?>
                    <div class="card col-md-6">
                        <img class="card-img-top" src="<?= $post['img']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['title']?></h5>
                            <p class="card-text"><?= $post['description']?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

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