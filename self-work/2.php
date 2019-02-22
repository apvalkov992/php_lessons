<?php
	$month = 6;

	switch ($month) {
		case 1:
			echo "январь<br>";
			break;
		case 2:
				echo "февраль<br>";
				break;
		case 3:
				echo "март<br>";
				break;			
		case 4:
				echo "апрель<br>";
				break;		
		case 5:
				echo "май<br>";
				break;		
		case 6:
				echo "июнь<br>";
				break;		
		case 7:
				echo "июль<br>";
				break;			
		case 8:
				echo "аыгуст<br>";
				break;			
		case 9:
				echo "сентябрь<br>";
				break;
		case 10:
				echo "октябрь<br>";
				break;	
		case 11:
				echo "ноябрь<br>";
				break;	
		case 12:
				echo "декабрь<br>";
				break;																										
		default:
			echo "нет такого месяца<br>";
			break;

		}

		for ($i=1; $i <= 40; $i++) { 
			echo "$i<br>";
		}
?>