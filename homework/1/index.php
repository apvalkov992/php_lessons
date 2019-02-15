<?php
 // Home work #1

$myName = 'Yuriy';
$Yuriy = 'Gur';

// const FULL_AGE = 33;
define('FULL_AGE', '33');

echo "My name is $myName $Yuriy<br>I am " . FULL_AGE . " years<br>";

static $gender = 'male';

global $city = "Donetsk";

unset ($myName, $Yuriy, $gender, $city);

 
 

 




