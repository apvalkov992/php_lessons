<?php
/**
 *
 */

// Домашнее задание 2


$buyerIndex = 'Кирилл';
$zoneName = 'Первый республиканский';



define('ADULT_AGE', 18);



$zone = [
"Семерочка"	=> [
	    	'name' => ' "Семерочка" ',
	    	'square' => 1000,
	    	'startTime' => '8:00',
	    	'endTime' => '20:00',
	    	'address' => 'Донецк, ул.Раздольная, 19'
	    	],
"Первый республиканский" => [
	    	'name' => ' "Первый республиканский" ',
	    	'square' => 1000,
	    	'startTime' => '00:00',
	    	'endTime' => '24:00',
	    	'address' => 'Донецк, ул.Челюскинцев, 159'
	     	],
"Парус"	=> [
	    	'name' => ' "Парус" ',
	    	'square' => 1000,
	    	'startTime' => '6:00',
	    	'endTime' => '22:00',
	    	'address' => 'Донецк, проспект Ватутина, 60'
	     	],
];


echo " OOO {$zone[$zoneName]['name']}, {$zone[$zoneName]['address']} " . "<br/> График работы: {$zone[$zoneName]['startTime']} - {$zone[$zoneName]['endTime']} ";


// Товары
$goods = [
    1 => [
        'name' => 'Водка',
        'price' => 20,
        'isBan' => true
    ],
    2 => [
        'name' => 'Хлеб',
        'price' => 20,
        'isBan' => false
    ],
    3 => [
        'name' => 'Колбаса',
        'price' => 30,
        'isBan' => false
    ]
];

// Покупатели

$buyer = [
  'Алексей' => ['name' => 'Лёша',
    	'age' => 24,
    	'numberCard' => 1111,
    	'banBuyer' => true
		],
  'Андрей' => ['name' => 'Андрей',
    	'age' => 12,
    	'numberCard' => 2222,
    	'banBuyer' => false
		],
  'Кирилл' => ['name' => 'Кирилл',
    	'age' => 19,
    	'numberCard' => 3333,
    	'banBuyer' => false
		],
   'Антон' => ['name' => 'Антон',
    	'age' => 25,
    	'numberCard' => 4444,
    	'banBuyer' => false
  		]		
];

// Кредитные карты

$buyerCard = $buyer[$buyerIndex]['numberCard'];
$creditCard = [
	1111 => ['money' => 20000,
			'banCard' => false,
			'discount' => 3
			],
	2222 => ['money' => 50000,
			'banCard' => true,
			'discount' => false
			],
	3333 => ['money' => 14000,
			'banCard' => false,
			'discount' => 10
			],
	4444 => ['money' => 20000,
			'banCard' => false,
			'discount' => 5
			]
];

// Покупка

$cart = [
    [
        'good' => 3,
        'count' => 12,
        'total' => 340
    ],
    [
        'good' => 2,
        'count' => 5,
        'total' => 100
    ],
    'total' => 440,
    'hasBan' => true,
    'change' => 0
];



$discountSum = $cart['total'] - ($cart['total'] * $creditCard [$buyerCard] ['discount'] / 100 );



If ($buyer[$buyerIndex]['banBuyer'] === true) {
	echo '<br/>Вы находитесь в черном списке покупателей!';
}
elseif ($creditCard[$buyerCard]['banCard'] === true ) {
	echo "<br/>Ваша кредитная карта находится в черном списке!";
}
else {

		if ($cart['hasBan'] && $buyer[$buyerIndex]['age'] < ADULT_AGE) {
		    echo ("<br/><br/> Продажа алкоголя несовершеннолетним запрещена.");
		} elseif ($creditCard [$buyerCard] ['money'] >= $cart['total']) {
		    $cart['change'] = $creditCard [$buyerCard] ['money'] - $discountSum;

		    echo ("<br/><br/> Ваши {$creditCard [$buyerCard] ['money']} руб.");
		    echo ("<br/><br/> Сумма Вашей покупки с учетом скидки составляет $discountSum руб. ");
		    echo $cart['change'] ? ("<br/><br/> Ваша сдача {$cart['change']} руб.") : '';
		    echo ("<br/><br/> Спасибо за покупку! <br/><br/><br/><br/> ");
		} else {
		    echo ("<br/><br/> У Вас недостаточно средств для покупки! <br/><br/><br/><br/>");
		}
}



