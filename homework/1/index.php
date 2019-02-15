<?php
/**
 *
 */
/* Самостоятельная работа доработанная*/
$name = 'Arkadiy4';
$nnn = true;
$myfloat = 1.22;
$pusto = null ;

<<<<<<< HEAD
var_dump($name, $nnn, $myfloat, $pusto);
echo ("<br><br><br><br>");
=======
$name = 'Toxa';
>>>>>>> 530e11fd9f45df97e1c770159ff52b67c05c8294



/*Домашняя работа 1*/
echo "  Homework #1 <br>";
// Определение переменных
$name = 'Arkadiy'; 		// Имя , строковая переменная
$arkadiy = "Chekin";	// Фамилия , строковая переменная
const AGE = 56;			// Возраст , константа , целая
static $sex = "Male";	// Пол, статическа переменная(необнуляемая за областью видимости)
global $city; $city = "Donetsk";			// город, глобальная переменная

//Проверка переменных выводом на экран
echo '<br>' ;
echo 'name    = ', $name, '<br>';
echo 'arkadiy = ', $arkadiy, '<br>';
echo 'AGE     = ', AGE, "<br>";
echo 'sex     = ', $sex, "<br>";
echo 'city    = ', $city, "<br>";
var_dump($name, $arkadiy, AGE, $sex, $city); 

//Удаление переменных
unset ($name, $arkadiy, $sex, $city);
//runkit_constant_remove( "AGE") ; undefined function

//Проверка переменных после удаления
echo '<br><br>' ;
echo 'name    = ', $name, '<br>';
echo 'arkadiy = ', $arkadiy, '<br>';
echo 'AGE     = ', AGE, "<br>";
echo 'sex     = ', $sex, "<br>";
echo 'city    = ', $city, "<br>";
var_dump($name, $arkadiy, AGE, $sex, $city); 