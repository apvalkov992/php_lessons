<?php
/**
 *
 */



echo $months[$month]['monthName'];

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40]; 
$i=0;

While ($i <= 39) {
	echo $a[$i] . " ";
	$i++;
}

$month = 4;

	switch ($month) {
		case 1:
			echo "Январь";
			break;
		case 2:
			echo "Февраль";
			break;
		case 3:
			echo "Март";
			break;
		case 4:
			echo "Апрель";
			break;
		case 5:
			echo "Май";
			break;
		case 6:
			echo "Июнь";
			break;	
		case 7:
			echo "Июль";
			break;	
		case 8:
			echo "Август";
			break;
		case 9:
			echo "Сентябрь";
			break;
		case 10:
			echo "Октябрь";
			break;
		case 11:
			echo "Ноябрь";
			break;
		case 12:
			echo "Декабрь";
			break;							
		default:
			echo "Не понятно";
			break;
	}