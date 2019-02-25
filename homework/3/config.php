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

$discount = [
	'saturday' => 2,	
	'sunday' => 5,
	
];

$banedCards = [
	1 =>[
		'number' => '4100 1111 2222 3333',
		'type' => 'VISA',
		'name' => 'Петр',
		'fullName' => 'Сизов',
		'validYear' => 2020,
		'validMonth' => 12,
		'isBan' => true,
	],
		
	2 =>[
		'number' => '4100 1111 2222 4444',
		'type' => 'MasterCard',
		'name' => 'Ибрагим',
		'fullName' => 'Бухоед',
		'validYear' => 2021,
		'validMonth' => 10,
		'isBan' => true,
	],
	
];

$banedBuyers = [
	1 =>[
		'id' => 1,
		'name' => 'Петр',
		'fullName' => 'Сизов',
		'age' => 39,
		'birthDay' => '1980/11/12',
		'stealDay' => '2020/01/02',
		'photos' => [
			'passportScan1' => 'sizov1.jpg',
			'passportScan2' => 'sizov2.jpg',
			'passportScan3' => 'sizov3.jpg',
			'atTheBoard' => 'sizov_b.jpg',
			'stolenGoods' => 'sizov_goods.jpg',
			'policeProtocol' => 'sizov_potocol.jpg',
		]
	
	]
];

$hoursOfWork = [
	'sunday' => [
				'open'=> 8,
				'close' => 19,
				'breakStart' => null,
				'breakStop' => null,
	],
	'monday' => [
				'open'=> 7,
				'close' => 22,
				'breakStart' => null,
				'breakStop' => null,
	],
	'tuesday' => 'monday',
	'wednesday' => 'monday', 
	'thursday' => 'monday', 
	'friday' => 'monday',
	'saturday' => 'mondey',
	
];

$adress = [
	'nameStore' => 'Whole Foods Market',
	'state' => 'USA',
	'city' => 'Chicago',
	'street' => 'W. Huron',
	'building' => 30,
	'phone' => '(312) 932-9600',
];

$zone = [
	'flourProducts' => [
			'director' => 'Barak Kabana',
			'square' => 1000,
			'showcase' => 10,
			'scales' => 5,
			'product' => [
					'whiteBread' => [
							'count' => 50,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
					'balckBbread' => [
							'count' => 30,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
					'roll' => [
							'count' => 40,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
					'doughnut' => [
							'count' => 60,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
			],
	],

	'meatProducts' => [
			'director' => 'Trampa Pa',
			'square' => 1200,
			'showcase' => 12,
			'scales' => 9,
			'product' => [
					'krakov' => [
							'count' => 50,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
					'babySausages' => [
							'count' => 30,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
					'doctor' => [
							'count' => 40,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
					'milkSausage' => [
							'count' => 60,
							'validYear' => 2019,
							'validMonth' => 04, 
							'validDay' => 12, 
					],
			],
	],				
];



?>
