<?php

/*  
//lesson №1

$name = "Василий"; //str = string
$age = 34;	//Целое число
$full_age = 34.5; //Число с плавающей точкой
$male = true; //Булево true|false
$zero = null; //Null

echo "$name<br>";
echo "$age<br>";
echo "$full_age<br>";
echo "$male<br>";

*/ 

//Home work №1

$MyName = "Vasiliy"; // Создать переменную содержащую своё имя
$Vasiliy = "Guziy"; // Создать переменную названием которой будет своё имя а значением фамилия
define ("AGE", "34"); // Создать константу содержащую количество полных лет
static $gender = male;// Создать статическую переменную содержащую пол
$town = "Donetsk";
global $town; // Создать глобальную переменную содержащую название города

unset ($MyName, $Vasiliy, $gender, $town); /* Удалить все ранее созданные переменные. Поставил перед echo, так как после объявления в данной функции нет смысла))) После она не удаляет переменные.*/

echo "$MyName<br>";
echo "$Vasiliy<br>";
echo AGE;
echo "<br>$gender<br>";
echo "$town<br>";






?>

