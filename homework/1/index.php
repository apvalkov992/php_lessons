<?php

// Home work #1

$myName = 'Yuriy';
$Yuriy = 'Gur';

// const FULL_AGE = 33;
define('FULL_AGE', '33');

echo "My name is $myName $Yuriy<br>I am " . FULL_AGE . " years<br>";

static $gender = 'male';

global $city;
$city = 'Donetsk';

unset ($myName, $Yuriy, $gender, $city);


//difference between static and global

function funct() { 
    static $a; 
    $a++; 
    echo " $a";

    global $b;
    $b++;
    echo " $b";
} 
for ($i = 0; $i++<10;) {
    funct();
}

echo "<br>a = $a";
echo "<br>b = $b";
