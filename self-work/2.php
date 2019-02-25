<?php
$month = "6";
	switch ($month) {
			
		case 1:
 			echo nl2br ("январь" . PHP_EOL);
			break;
		case 2:
			echo nl2br ("февраль" . PHP_EOL);
			break;
		case 3:
			echo nl2br ("март" . PHP_EOL);
			break;
		case 4:
 			echo nl2br ("апрель" . PHP_EOL);
 			break;
 		case 5:
 			echo nl2br ("май" . PHP_EOL);
 			break;
 		case "6":
 			echo nl2br ("июнь" . PHP_EOL);
 			break;
 		case 7:
 			echo nl2br ("июль" . PHP_EOL);
 			break;
 		case 8:
 			echo nl2br ("август" . PHP_EOL);
 			break;
 		case 9:
 			echo nl2br ("сентябрь" . PHP_EOL);
 			break;
 		case 10:
 			echo nl2br ("октябрь" . PHP_EOL);
 			break;
 		case 11:
 			echo nl2br ("ноябрь" . PHP_EOL);
 			break;
 		case 12:
 			echo nl2br ("декабрь" . PHP_EOL);
 		
 			break;
	}
$i=0;
while ($i++<40)
	echo nl2br ($i . PHP_EOL);
?>