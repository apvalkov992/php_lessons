<?php
/* Сделать конфигурационный файл Магазина с такими настройками:
  
  * процент скидки
  * черный список кредитных карт
  * черный список покупателей (каждый покупатель структурированные данные)
  * время работы (начало)
  * время работы (конец)
  * адрес
  * торговые зоны (использовать как можно большую вложенность для более подробного описания)
* Подключить файл в `index.php`
*/


$blackCards [
	[
		$number = "4100 1111 2222 3333";
		$type = "VISA";
		$name = "Петр";
		$fullName = "Сизов";
		$expireYear = 2020;
		$expireMonth= 12;
		$isBan = true;
	]
	[
		$number = "4100 1111 2222 4444";
		$type = "MaserCard";
		$name = "Ибрагим";
		$fullName = "Бухоед";
		$expireYear = 2021;
		$expireMonth= 10;
		$isBan = true;
	]
	
]
$blackBuyers [
	[
		$id = 1;
		$name = "Петр";
		$fullName = "Сизов";
		$age = 39;
		$birthDay = "1980/11/12";
		$stealDay = "2020/01/02";
		$photos[
			$passportScan1 = "sizov1.jpg";
			$passportScan2 = "sizov2.jpg";
			$passportScan3 = "sizov3.jpg";
			$passportScan4 = "";
			$atTheBoard = "sizov_b.jpg";
			$stolenGoods = "sizov_goods.jpg";
		]
	
	]
]

$hoursOfWork[
	$sunday[
		$open = 9;
		$close = 15;
		$breakStart = null;
		$breakStop = null;
	]
	$monday[
		$open = 8;
		$close = 20;
		$breakStart = 12;
		$breakStop = 13;
	]
	$tuesday = $wednesday = $thursday = $friday = $monday;
	$saturday[
		$open = 9;
		$close = 17;
		$breakStart = null;
		$breakStop = null;
	]
]

retun;




?>
