<?php
/*
* Вывести на экран предупреждающее сообщение если покупатель несовершеннолетний и в товарах присутствует алкоголь
* Вывести сообщение о сумме покупки если нет запретов на продажу товаров
* Вывести сообщение о удачной покупке если сумма полученная от покупателя больше суммы покупки
* Вывести сообщение о недостаточном балансе если сумма полученная от покупателя меньше суммы покупки
* Вывести сообщение о сдаче если сумма полученная от покупателя больше суммы покупки и не равна сумме покупки
* Вывести сообщение о удачно состоявшейся сделке при условии что покупатель в полной мере расплатился за товар и получил сдачу( если было необходимо )
*/
define('ADULT_AGE', 18);
//

include 'config.php';


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
// Покупатель
$buyer = [
    'name' => 'Лёша',
    'age' => 24,
    'discount' => 0,
    'money' => 20000
];

$buyer = [
    'name' => 'Андрей',
    'age' => 18,
    'discount' => 0,
    'money' => 500
];

//               false
//    true                  false
if ($cart['hasBan'] && $buyer['age'] < ADULT_AGE) {
    echo nl2br("Продажа алкоголя несовершеннолетним запрещена." . PHP_EOL);
} elseif ($buyer['money'] >= $cart['total']) {
    $cart['change'] = $buyer['money'] - $cart['total'];

    echo nl2br("Ваши {$buyer['money']} руб." . PHP_EOL);
    echo nl2br("Сумма Вашей покупки состовляет {$cart['total']} руб." . PHP_EOL);
    echo $cart['change'] ? nl2br("Ваша сдача {$cart['change']} руб." . PHP_EOL) : '';
    echo nl2br("Спасибо за покупку!");
} else {
    echo nl2br("У Вас недостаточно средств для покупки!" . PHP_EOL);
}

echo "<br>";
foreach ($cart as $item) {
    //    [
    //        'name' => 'Колбаса',
    //        'price' => 30,
    //        'isBan' => false
    //    ]

    //                    3
    echo nl2br($goods[$item['good']]['name'] );
    echo "-";
    echo nl2br($goods[$item['good']]['price'] . PHP_EOL);
}