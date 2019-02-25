<?php
/*

//
//### Практическая часть
* Вывести на экран список пользователей в табличном виде
* Вывести на экран категории в виде списка
* Вывести на экран товары в виде плитки (элемент `card`)
*/
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
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">WebDevelopmentCourse</a>
            </nav>
        </div>

    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Домашняя работа 4</h3>
            <div class="alert alert-success">
           
                <?php $config = require_once 'config.php'; ?>

            </div>
            
            <table class="table table-striped"> 
                <h4>Таблица пользователей</h4>

                <thead>
                <tr>									<!--Создает строку таблицы. -->
                    <th>№</th>							<!--Создает заголовок ячейки таблицы. -->
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Акаунт</th>
                    <th>Имя компьютера</th>
                    <th>Почта</th>
                </tr>
                </thead>
                <tbody>
                <?php 

                foreach ($config[users] as $user) :?>		<!-- :?> и  < ?=  это разрыв в PHP ? -->
                    <tr>                                        <!--Создает строку таблицы. -->
                        <td><?= $user['id']?></td>				<!--td Создает ячейку таблицы. -->
                        <td><?= $user['firstName']?></td>		<!-- < ?= -->
                        <td><?= $user['lastName'] ?></td>
                        <td><?= $user['login'] ?></td>
                        <td><?= $user['compName'] ?></td>
                        <td><?= $user['email'] ?></td>                    
                    </tr>
                <?php endforeach;?>
                </tbody>

            </table>

            <?php  
                echo '<br><br><br>';
                $list = $config[category]; 
            ?>
            <h4>Список</h4>
            <ol class="list-group">
                <?php foreach ($list as $item) : ?>

                    <li class="list-group-item"><?= $item?> </li>

                <?php endforeach;?>
            </ol>

            <?php
                echo '<br><br><br>';
                $cakes = $config[cakes];
            ?>

            <h4>Товары</h4>
            <div class="row">
                <?php foreach ($cakes as $cake) :?>
                    <div class="card col-md-4">
                        <img class="card-img-top" src="<?= $cake['img']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $cake['name']?></h5>
                            <p class="card-text"><?= $cake['ingredients']?></p>
                        </div>
                    <a href="<?= $cake['img']?>" class="btn btn-primary"> Подробнее </a> 
                    <p class="card-footer "><?= 'Цена - '.$cake['price'].'руб/кг'?></p>
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