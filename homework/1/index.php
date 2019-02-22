<?php
/**
 *
 */

<<<<<<< HEAD
<<<<<<< HEAD
$name = 'Димоооооооон *музыка из Бумер*';
$Dima = 'Дуванов';
// $name = 'Dima'
// $$name = 'Duvanov'
define('AGE',18);
static $gender = 'Мужской';
=======
$name = 'My name';
>>>>>>> 63dc21b41b4a0ee26f6a2c18c0a7f1d3b4030758
=======
$name = 'My name';
>>>>>>> bda95e7d4d0a2f223c7c44dd7930fd31bc0d7f83

$city = 'Мой город: ';
function my_city() {
    global $city;
    $city .= 'Ясиноватая';
}
my_city();

echo $name.'<br>'.$Dima.'<br>'.AGE.'<br>'.$gender.'<br>'.$city.'<br>';

unset($name,$Dima,$gender,$city);
// unset(AGE);
echo $name.'<br>'.$Dima.'<br>'.AGE.'<br>'.$gender.'<br>'.$city.'<br>';
