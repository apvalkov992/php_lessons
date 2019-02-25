<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

             <?php
                     $users = [
                 1 => [
                     'name' => 'Федр',
                     'login' => 'Fed',
                     'password' => '*******',
                     'numberPhone' => '071 334 25 25',
                     'email' => 'sobaka@so.ua',
                 ],
                 2 => [
                     'name' => 'Тедди',
                     'login' => 'Ted',
                     'password' => '*******',
                     'numberPhone' => '066 555 20 11',
                     'email' => 'mail@ml.ua',
                 ],
                 3 => [
                     'name' => 'Френсис',
                     'login' => 'Frenc',
                     'password' => '*******',
                     'numberPhone' => '093 889 45 54',
                     'email' => 'google@goo.ua',
                 ]

             ]
             ?>
            <table class="table">
                <thead>
                <tr>
                    <th>Имя</th>
                    <th>Login</th>
                    <th>Password</th>
                    <th>Номер телефона</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) :?>
                    <tr>
                        <td><?= $user['name']?></td>
                        <td><?= $user['login']?></td>
                        <td><?= $user['password']?></td>
                        <td><?= $user['numberPhone']?></td>
                        <td><?= $user['email']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>

            </table>

            <?php
            $list = ['Новости в мире', 'Спорт', 'Космос', 'Здоровье', 'Психология', 'Технологии', 'Позитив']
            ?>

            <ul class="list-group" style="margin-bottom: 20px">
                <?php foreach ($list as $item) : ?>

                    <li class="list-group-item"><?= $item?></li>

                <?php endforeach;?>
            </ul>

            <?php

            $goods = [
                [
                    'title' => 'Сменное лезвие OneBlade QP210/50',
                    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и ',
                    'img' => 'http://lorempixel.com/400/200',
                    'price' => 999,
                    'like' => 25,
                    'comments' => 78,
                    'created' => '1 месяц назад'

                ],
                [
                    'title' => 'Триммер-Стайлер-Бритва Philips OneBlade ',
                    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и ',
                    'img' => 'http://lorempixel.com/400/200/technics',
                    'price' => 1399,
                    'like' => 25,
                    'comments' => 25,
                    'created' => '2 дня назад'
                ],
                [
                    'title' => 'Сменное лезвие OneBlade QP210/50',
                    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и ',
                    'img' => 'http://lorempixel.com/400/200/sports',
                    'price' => 999,
                    'like' => 25,
                    'comments' => 8,
                    'created' => '7 дней назад'
                ],
                [
                    'title' => 'Сменное лезвие OneBlade QP210/50',
                    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и ',
                    'img' => 'http://lorempixel.com/400/200/food',
                    'price' => 999,
                    'like' => 25,
                    'comments' => 7,
                    'created' => '4 часа назад'
                ],
            ];
            ?>

            <div class="row">
                <?php foreach ($goods as $good) :?>
                    <div class="card col-md-4" style="margin: 20px; padding: 0">
                        <a href="#" style="text-decoration: none; color: #666">
                            <img class="card-img-top" src="<?= $good['img']?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $good['title']?></h5>
                                <p class="card-text"><?= $good['description']?></p>
                                <hr>
                                <p class="card-text text-center" style="font-weight: bold">
                                    <?= $good['price']?>
                                    <i class="fas fa-dollar-sign"></i>
                                </p>
                                <hr>
                                <p class="card-text text-center" style="font-weight: bold">
                                    <i class="far fa-comments"></i>
                                    <?= $good['comments']?>
                                </p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                <i class="far fa-calendar-alt"></i>
                                <?= $good['created']?>
                            </div>
                        </a>
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