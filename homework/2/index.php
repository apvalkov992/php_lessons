<?php
/*Homework*/
$goods=['beer', 'potato', 'tomatoes', 'sweets'];
$good='tomatoes';
$price=70;
define('majority', 18);
$age =19;
$cash=200;
	if($good==$goods[0] && $age<majority) {
		echo("You can't buy this good!!!<br>");
		die();
	}
	   elseif($good==$goods[1]){
	 	$price=41;
	 	echo('Since you are'.' '. $price .' '.'rubles.<br>');
	 }
	   elseif($good==$goods[2]){
	 	$price=16;
	 	echo('Since you are'.' '. $price .' '.'rubles.<br>');
	 }
	   elseif($good==$goods[3]){
	 	$price=33;
	 	echo('Since you are'.' '. $price .' '.'rubles.<br>');
	 }
	   else
		echo('Since you are'.' '. $price .' '.'rubles.<br>');
	if($cash<$price)
		echo('There is not enough'.' '.($price-$cash).' '.'rubles.');
	   elseif($cash==$price){
	 	echo('Thanks for your purchase! Come again!');
	 }
	   else
	 	echo('Your change'.' '.($cash-$price).' '.'rubles.'.'Thanks for your purchase! Come again!');
?>