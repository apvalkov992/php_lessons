<?php

$name = 'My name';

var_dump($name);
=======

//Lesson 3 (12.02.2019)
$name = 'Pavel';
var_dump($name);


// Self work 1 (12.02.2019)
$string_var = 'Pavel';
$bool_var = true;
$int_var = 177777; 
$float_var = 124.02;
$null_var = null;


// Homework 1 (13.02.2019)
$my_name = 'Pavel';
$pavel = 'Dobrov';
define("AGE", 20);
static $sex = male;
global $city;
$city = Moscow;


/* View
echo "$my_name <br>";
echo "$pavel <br>";
echo "AGE <br>";
echo "$sex <br>";
echo "$city <br>";
*/


unset($my_name, $pavel, $sex, $city);
?>

