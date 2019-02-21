<?php
$my_name = 'Vasiliy';
$$my_name = 'Guziy';
define (AGE, 34);
static $gender = male;
$town = 'Donetsk';
global $town;

unset ($my_name, $$my_name, $gender, $town);

echo "$my_name<br>";
echo "$$my_name<br>";
echo AGE;
echo "<br>$gender<br>";
echo "$town<br>";
?>

