<?php
/**
 *
 */

$var_null = null;
$var_bool = false;
$var_int = 666;
$var_float = 2.15;
$var_string = "Kirill"; 
$var_array = array(
                   "login" => "superaft", 
                   "branchName" => "KOgula", 
                  );

var_dump($var_null);
echo "<br>";
var_dump($var_bool);
echo "<br>";
var_dump($var_int);
echo "<br>";
var_dump($var_float);
echo "<br>";
var_dump($var_string);
echo "<br>";
var_dump($var_array);
echo "<br>";

/* ДЗ */

$name = "Kirill";  // Создать переменную содержащую своё имя
$$name = "Ogula"; // Создать переменную названием которой будет своё имя а значением фамилия
define("AGE", 18); // Создать константу содержащую количество полных лет
static $gender = "male"; // Создать статическую переменную содержащую пол
global $city; // Создать глобальную переменную содержащую название города 
$city = "donetsk";

var_dump($Kirill);

unset($name, $kirill, $gender, $city); // Удалить все ранее созданные переменные
?>