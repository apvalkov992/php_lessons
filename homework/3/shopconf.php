<?php
/*
  * Сделать конфигурационный файл Магазина с такими настройками:
  * процент скидки
  * черный список кредитных карт
  * черный список покупателей (каждый покупатель структурированные данные)
  * время работы (начало)
  * время работы (конец)
  * адрес
  * торговые зоны (использовать как можно большую вложенность для более подробного описания)
  * Подключить файл в `index.php`
*/


$discountPercent = [
	['percent'=>2, 'minTotal'=>2000, 'maxTotal'=>2999],
	['percent'=>3, 'minTotal'=>3000, 'maxTotal'=>9999],
	['percent'=>5, 'minTotal'=>10000, 'maxTotal'=>20999]
];

$blacklistCreditCard = [
	[
		'holder'=>'Ivanov I. I.',
		'cardNumber'=>1058764815,
		'validity'=>'25/10',
		'cardType'=>'visa'
	]
];

$buyerBlacklist = [
	1 => [ 
		'name' => 'Petrow Petr Petrovich',
		'birthDate' => '10.10.1987',
		'passport'=> 851475214,
		'whyBlock'=>'steal',
		'dateBlock'=>'04.08.2016'
	]
];

$startWorkTime = [
	'monday'=>7,
	'tuesday'=>7,
	'wednesday'=>7,
	'thursday'=>7,
	'friday'=>7,
	'saturday'=>7,
	'sunday'=>7
];

$finishWorkTime = [
	'monday'=>22,
	'tuesday'=>22,
	'wednesday'=>22,
	'thursday'=>22,
	'friday'=>22,
	'saturday'=>23,
	'sunday'=>23
];

$storeAddress = ['country'=>'', 'city'=>'', 'street'=>'', 'build'=>''];

$shoppingArea = [
	1 => [
		'Area'=>'Молочный отдел',
		'countShowcase'=> 5,
		'space'=>200,
		'countWorker'=>6
		]

];
