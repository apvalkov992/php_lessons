<?php
/**
 *
 */

$name = 'Egor';

/*Self work */
$int = 1;
$bool = true;
$real = 1.25;
$string = 'String is here';
$empty = NULL;

var_dump($name);


/* homework */


$my_name = 'Egor';
$egor = 'Kozhevnikov';
define("AGE", 19);
static $sex = male;
global $CITY;
$CITY = 'Donetsk';
unset($my_name, $egor, $sex, $CITY);

/*Переменные удалил, а константа осталась*/