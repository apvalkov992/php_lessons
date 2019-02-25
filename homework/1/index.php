<?php
/**
 *
 */

$name = 'Игорь';

$boolPer = false;

$intPer = 26;

$floatPer = 26.8;

$stringPer = 'моя переменная';

$nullPer = null;

var_dump($name);


/*               ДОМАШКА                          */


$name = 'Igor';  						/*Создать переменную содержащую своё имя*/
echo $name. "<br>";

$Igor = 'Slizh';						/*Создать переменную названием которой будет своё имя а значением фамилия*/
echo $Igor. "<br>";

define("AGE", 26);						/*Создать константу содержащую количество полных лет*/
echo AGE . "<br>";

static $gender = 'man';					/*Создать статическую переменную содержащую пол*/
echo $gender. "<br>";

global $city; 							/*Создать глобальную переменную содержащую название города*/
$city = 'Donetsk';	
echo $city. "<br>";

unset($name, $Igor, $gender, $city);	/*Удалить все ранее созданные переменные*/
echo $name. "<br>";
echo $Igor. "<br>";
echo $gender. "<br>";
echo $city. "<br>";


