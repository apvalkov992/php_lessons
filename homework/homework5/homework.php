<?php
/**
 *
 */


// Написать функцию аналог `explode`

function viewNamesExplode($names){
		$explode = explode(" ", $names);
		return $explode;
		}
$result = viewNamesExplode("Кирилл Никита Борис Антон Дмитрий");
print_r ($result);

echo "<br/><br/>"; 

// Аналог

function viewNamesWithoutExplode($names){
		$split = split(" ", $names);
		return $split;
		}
$result = viewNamesWithoutExplode("Кирилл Никита Василий Антон Дмитрий");
print_r ($result);

echo "<br/><br/>";

// Написать функцию аналог `substr`

$rest = substr("Have a nice day!", 0, 9);
echo $rest;

echo "<br/><br/>"; 

// Аналог

function textWithoutSubstr($text, $a, $b=255){
		$arrText = str_split($text);
		foreach ($arrText as $key => $value) {
			if ($key>=$a && $key<$b) {
				echo $value;
			}
		}
}

textWithoutSubstr('Have a nice day!', 0, 9);

