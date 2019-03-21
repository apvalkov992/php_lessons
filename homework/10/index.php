<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home work 10</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
var_dump($_POST);
?>

<form action="app.php" method="post">
    <h2>Регистрация пользователя</h2>
    <div class="form-group">
        <label for="exampleFormControlInput1">Фамилия Имя Отчество</label>
        <input type="text" class="form-control" name="fullname" placeholder="Введите ФИО">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Логин</label>
        <input type="text" class="form-control" name="usrname" placeholder="Введите Логин">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Введите Пароль">
    </div>
    <!--
    <div class="form-group">
        <label for="exampleInputPassword2">Повтор пароля</label>
        <input type="password" class="form-control" id="exampleInputPassword2" name="repeatPassword" placeholder="Повторите Пароль">
    </div>
    -->
    <div class="form-group">
        <label for="exampleFormControlInput1">Email адрес</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Введите Email адрес">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Телефон</label>
        <input type="text" class="form-control" name="phone" placeholder="Введите Телефон">
    </div>
    <button type="submit" class="btn btn-primary">Регистрация</button>
</form>


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