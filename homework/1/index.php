<?php
/**
 *
 */

$name = 'Димоооооооон *музыка из Бумер*';
$Dima = 'Дуванов';
// $name = 'Dima'
// $$name = 'Duvanov'
define('AGE',18);
static $gender = 'Мужской';

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
