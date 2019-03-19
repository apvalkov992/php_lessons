<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home work #4</title>
  </head>
  <body>
   <!-- Вывести на экран список пользователей в табличном виде --> 
  <div class="container-fluid">
  <?php require_once 'data/user.php' ?>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Отчество</th>
      <th scope="col">Дата рождения</th>
      <th scope="col">Логин</th>
      <th scope="col">Пароль</th>
      <th scope="col">E-mail</th>
      <th scope="col">Телефонный номер</th>
      <th scope="col">Последняя регистрация</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $key) : ?>
      <tr>
        <td scope="row"><?= $key['idUser']?></td>
        <td><?= $key['lastName']?></td>
        <td><?= $key['firstName']?></td>
        <td><?= $key['middleName']?></td>
        <td><?= $key['birthday']?></td>
        <td><?= $key['userName']?></td>
        <td><?= $key['pass']?></td>
        <td><?= $key['email']?></td>
        <td><?= $key['phone']?></td>
        <td><?= $key['lastLogin']?></td>
      </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
<!-- Вывести на экран категории в виде списка -->
<?php require_once 'data/category.php' ?>
<div class="container">
  <ul class="list-group">
  <?php foreach ($category as $item) : ?>
    <li class="list-group-item"><?= $item['categoryName']?>
      <br>
      <a href="#">Просмотреть все <?= $item['goodsAmount']?> товаров из данной категории</a>
      <p class="list-group-item-text"><?= $item['description']?></p>
  <?php endforeach;?>
  </li>
  </ul>
</div>

<!-- Вывести на экран товары в виде плитки (элемент `card`) -->
<?php require_once 'data/goods.php' ?>
<div class="container-fluid">
<div class="card-deck">
  <?php foreach ($goods as $key) : ?>
  <div class="card">
    <img class="card-img-top" src="<?= $key['img']?>">
    <div class="card-body">
      <h5 class="card-title"><?= $key['title']?></h5>
      <p class="card-text"><small class="text-muted"><?= $key['category']?></small></p>
      <p class="card-text"><small class="text-muted"><?= $key['brend']?></small></p>
      <p class="card-text"><?= $key['description']?></p>
      <h5 class="card-title">Цена: <?= $key['price']?></h5>
    </div>
  </div>
  <?php endforeach;?>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>