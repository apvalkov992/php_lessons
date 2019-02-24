<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа №4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include __DIR__. '/config/users.php';
    include __DIR__. '/config/shop.php';
    include __DIR__. '/app/helpers.php';
?>
<table class="table">
    <thead>
    <tr>
        <?php foreach ($users['usersHeaders'] as $user) :?>
            <th><?= $user ?></th>
        <?php endforeach;?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users['usersId'] as $user) :?>
        <tr>
            <td><?= $user['login']?></td>
            <td><?= $user['fullName']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['lastLogin']?></td>
            <td><?= $user['ipAdress']?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<hr>

<ul class="list-group">
    <?php foreach ($categoryList as $key => $item) :?>

        <li class="list-group-item">
            <?= $key?>
            <ul class="list-group">

            <?php foreach ($item as $subkey => $subitem) :?>
                <li class="list-group-item"><?= $subkey?></li>
            <?php endforeach;?>
            </ul>

        </li>

    <?php endforeach;?>
</ul>

<!--  Вывод карточек товаров -->

<div class="container-fluid">

    <div class="row">
   
<?php foreach ($categoryList['Компьютеры и ноутбуки']['Ноутбуки'] as $item) :?>
<div class="card col-3" style="width: 18rem;">
  <img src="<?= $item['cardLogo'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $item['cardName'] ?></h5>
    <p class="card-text"><?= $item['cardInfo'] ?></p>
    <a href="#" class="btn btn-primary">Купить за <?php priceThousand(ceil($item['cardPrice'] * CURRENCIES_UAH_RUB));?>р.</a>
  </div>
</div>
<?php endforeach;?>

    </div>    
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>
