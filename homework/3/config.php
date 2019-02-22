<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.02.2019
 * Time: 12:06
 */

$config = [
    'shop' => [
        'workingHours' => 'Семерочка',
        'areas' =>  [
            1 => [
                'name' => 'Кулинария',
                'numberOfSections' => 2,
                'square' => 530
            ],
            2 => [
                'name' => 'Пекарня',
                'numberOfSections' => 2,
                'square' => 800
            ],
            3 => [
                'name' => 'Овощи',
                'numberOfSections' => 1,
                'square' => 120
            ]
        ],
        'address' => 'г.Завтра / ул.Больших перспектив / д.95',
        'banBuyers' => [
            2,
            1
        ],
        'banCard' => [
            3,
            2
        ],

    ],

    'days' => [
        1 => 'понедельник',
        2 => 'вторник',
        3 => 'среда',
        4 => 'четверг',
        5 => 'пятница',
        6 => 'суббота',
        7 => 'воскресенье'
    ],

    'openingHours' => [
        'Семерочка' =>[
            1 => [
                'daysId' => [ 1, 2, 3, 4, 5,],
                'opened' => 8,
                'closed' => 22
            ],
            2 => [
                'daysId' => [ 6, 7],
                'opened' => 8,
                'closed' => 20
            ]
        ],
        'Пяторочка' => [
            1 => [
                'daysId' => [ 1, 2, 3, 4, 5, 6, 7],
                'opened' => 8,
                'closed' => 22
            ]
        ]


    ],

    'buyers' => [
        1 => [
            'name' => 'Федр',
            'age'  => 20,
            'creditCard' => 3,
            'numberPhone' => '071 334 25 25',
            'email' => 'sobaka@so.ua',
            'sale' => '10'
        ],
        2 => [
            'name' => 'Тедди',
            'age'  => 38,
            'creditCard' => 2,
            'numberPhone' => '066 555 20 11',
            'email' => 'mail@ml.ua',
            'sale' => '12'
        ],
        3 => [
            'name' => 'Френсис',
            'age'  => 25,
            'creditCard' => 1,
            'numberPhone' => '093 889 45 54',
            'email' => 'google@goo.ua',
            'sale' => '9'
        ]

    ],

    'creditCards' => [
        1 => [
            'cardName' => 'Максимум',
            'cardBank' => 'Альфа-Банк',
            'paymentSystem' => 'VISA',
            'cardNumber' => 100005668383934123,
            'expirationDate' => 'Январь 2020'
        ],
        2 => [
            'cardName' => 'Gold',
            'cardBank' => 'Приват',
            'paymentSystem' => [
                                'MasterCard',
                                'VISA'
            ],
            'cardNumber' => 100005665563934123,
            'expirationDate' => 'Апрель 2019'
        ],
        3 => [
            'cardName' => 'Monobank',
            'cardBank' => 'Monobank',
            'paymentSystem' => 'MasterCard',
            'cardNumber' => 1000065665563934123,
            'expirationDate' => 'Февраль 2019'
        ]
    ]
];

return $config;