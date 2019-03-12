<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home work 7</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
$goods = array_map('str_getcsv', file('../7/store/filebase.csv'));
//var_dump($goods)
?>
<table>
    <thead>
    <tr>
        <th>Заголовок</th>
        <th>Категория</th>
        <th>Цена</th>
        <th>Описание</th>
        <th>Картинки</th>
    </tr>
    </thead>
    <tbody>
                    <?php foreach ($goods as $good) :?>
    <tr>
        <td><?= $good[0]?></td>
        <td><?= $good[1]?></td>
        <td><?= $good[2]?></td>
        <td><?= $good[3]?></td>
        <td><img src="<?= $good[5]?>" alt="" width="100"></td>
    </tr>
<?php endforeach;?>
</tbody>
</table>


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