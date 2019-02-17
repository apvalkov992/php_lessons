<?php
	define("XAGE", 18); //Возраст совершеннолетия
    
	$customer_age = 50; //Возраст покупателя
    $customer_money = 1000; //Деньги к оплате
    
    //Товары в магазине
	$products = [
 				 "alcohol" => 60,
 				 "bread" => 15,
 				 "milk" => 70,
 				 "eggs" => 75,  
 				];

 	//Товары покупателя
 	$customer_products = [
 						  $products["milk"], 
 						  $products["eggs"], 
 						  $products["bread"],
 						  $products["alcohol"],
 						 ];

 	$to_pay = array_sum($customer_products); //Сумма к оплате
 	$change = $customer_money - $to_pay; //Сдача

 	if (in_array($products["alcohol"], $customer_products, true) && $customer_age < XAGE){
 		echo "Продажа алкоголя лицам не достигшим " . XAGE . " лет зарпещена!<br>";
 	}
 	elseif ($customer_money < $to_pay){
 		echo "Недостаточно средств<br>";
 	}
 	else{
 		echo "Сумма покупки: " . $to_pay. "<br>";
 		echo "К оплате: " . $customer_money . "<br>";
 		echo "Сдача: " . $change . "<br>";

 	}



?>