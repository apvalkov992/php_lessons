<?php
	define (EIGHTIN_EARS, 18);
	$buyer_age = 28;
	$buyer_cash = 678;
	$amount = 350;
	$alcohol = true or false;
	$change = $buyer_cash - $amount;

	if ($buyer_age < EIGHTIN_EARS and $alcohol == true) {
		echo "покупатель несовершеннолетний, в товарах присутствует алкоголь";
	} 
	else {

		echo "Cумма покупки $amount<br>";
		if ($buyer_cash >= $amount) {
	 	echo 'Оплата покупки произведена';
		}

		elseif ($buyer_cash < $amount) {
	 	echo 'недостаточно средств для оплаты товаров';
	 	}  

		if ($buyer_cash > $amount) {
		echo "<br>сумма покупки $amount, получено денег $buyer_cash, сдача: $change";
			if ($buyer_cash === $amount + $change) {
			echo "<br>Спасибо за покупку";
			} 
		} 
	} 	
?>