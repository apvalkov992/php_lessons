<? php
//* Вывести на экран название месяца преобразованное из номера месяца
//* Вывести на экран числа от 1 до 40
$a = "понедельник";
switch ($a) {
	case 1:
		echo "понедельник";
		break;
		case 2:
		echo "вторник";
		break;
		case 3:
		echo "среда";
		break;
		case 4:
		echo "четверг";
		break;
        case 5:
		echo "пятница";
		break;
		case 6:
		echo "суббота";
		break;
		case 7:
		echo "воскресенье";
		break;
	
	}
for (i=0; $i<40;$i++)
	{
		echo $i;
	}

	?>