<?php
/**
 *
 */

// Домашнее задание 2

$goods = "alcohol";
$age = 24;
$cost_goods = 39.99; 
$currency = "руб."; 
$cash = 24.99; 
$change = 0;

if ($goods === "alcohol" && $age < 18) {
	echo "Запрещена торговля алкогольной продукцией и табачными изделиями лицами, не достигшими 18 лет!";
}
else {
	echo "Запретов на приобретение продукции не обнаружено, сумма вашей покупки = " . $cost_goods . " " . $currency;

	if ($cash > $cost_goods) {
		$change = $cash - $cost_goods;
		echo "<br/> Ваша сдача = " . $change . " " . $currency . "<br/><br/> Оплата прошла успешно! <br/><br/> Спасибо за покупку!";
	}
	elseif ($cash === $cost_goods) {
		echo "<br/><br/> Оплата прошла успешно! <br/><br/> Спасибо за покупку!";
	}
	else {
		echo "<br/><br/> Ваших средств не хватает для приобретения продукции.";
	}
	
}