<?php
/**
 * процент скидки
 * черный список кредитных карт
 * черный список покупателей (каждый покупатель структурированные данные)
 * время работы (начало)
 * время работы (конец)
 * адрес
 * торговые зоны (использовать как можно большую вложенность для более подробного описания)
 */

define('CARD_TYPE_VISA', 'visa');
define('CARD_TYPE_MASTER_CARD', 'master_card');
define('CARD_TYPE_MIR', 'mir');

return [
    'discount' => [
        [
            'title' => 'От суммы покупки',
            'percent' => 2,
            'condition' => function ($total) {
                return $total > 1000;
            }
        ],
        [
            'title' => 'От типа карты',
            'percent' => 5,
            'condition' => function ($cardType) {
                return $cardType === CARD_TYPE_MIR;
            }
        ]
    ],
    'blackLists' => [
        'card' => [
            [
                'bank' => 'Сбербанк России',
                'paymentSystem' => CARD_TYPE_VISA,
                'cardNumber' => 8783281134625132,
                'expiredAt' => '2019-12-21',
            ],
            [
                'bank' => 'Приватбанк',
                'paymentSystem' => CARD_TYPE_MASTER_CARD,
                'cardNumber' => 8783281134625133,
                'expiredAt' => '2019-12-22',
            ]
        ],
        'buyers' => [
            [
                'firstName' => 'Вячеслав',
                'lastName' => 'Лихачёв',
                'middleName' => 'Ярославович',
                'birthday' => '15.03.1999',
                'gender' => 'male',
                'address' => '676374, г. Нива, ул. Дурновский Переулок, дом 72, квартира 63',
                'phone' => '8(027)884-94-98',
            ]
        ]
    ],
    'startAt' => '08:00',
    'endAt' => '20:00',
    'address' => 'ул. Строителей, 29',
    'departments' => [
        'men' => [
            'square' => 2000,
            'employeesCount' => 5,
            'leader' => 'Марфа Васильевна'
        ],
        'woman' => [
            'square' => 2500,
            'employeesCount' => 2,
            'leader' => 'Марфа Васильевна'
        ],
        'kids' => [
            'square' => 200,
            'employeesCount' => 4,
            'leader' => 'Марфа Васильевна'
        ]
    ]
];