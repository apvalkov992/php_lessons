

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
    $banksCard = [
        'cardsId' => [
            1 => [
                'bank'          => 'Восточный банк',
                'paymentSystem' => 'Мир',
                'cardNumber'    => '5871-8328-3129-7831',
                'cardOwner'     => 'Данил Романович Зимин',
                'validity'      => '2019-07-19',
                'blackList'     => false,
            ],
            2 => [
                'bank'          => 'ВТБ',
                'paymentSystem' => 'visa-classic',
                'cardNumber'    => '1706-3647-5828-3337',
                'cardOwner'     => 'Вячеслав Ярославович Лихачёв',
                'validity'      => '2019-08-22',
                'blackList'     => false,
            ],
            3 => [
                'bank'          => 'Сбербанк России',
                'paymentSystem' => 'visa-classic',
                'cardNumber'    => '8783-2811-3462-5132',
                'cardOwner'     => 'Борис Владимирович Терентьев',
                'validity'      => '2019-12-21',
                'blackList'     => true,
            ],
        ],
        'discountForCards' => [
            'Мир' => 15,
            'visa-classic' => 0,
        ],
    ];

    $blackListBayers = [
        'bayersId' => [
            1 => [
                'name' => 'Вячеслав',
                'surname' => 'Лихачёв',
                'middle name' => 'Ярославович',
                'dateBirthday' => '15.03.1999',
                'gender' => 'male',
                'home address' => '676374, г. Нива, ул. Дурновский Переулок, дом 72, квартира 63',
                'phone number' => '8(027)884-94-98',
            ],
            2 => [
                'name' => 'Мария',
                'surname' => 'Мартынова',
                'middle name' => 'Ильинична ',
                'dateBirthday' => '27.06.2003',
                'gender' => 'female',
                'home address' => '601524, г. Кропоткин, ул. Проектируемый 3683-й Проезд, дом 89, квартира 97',
                'phone number' => '8(912)119-71-82',
            ],
        ],
    ];

    $shop = [
        'info' => [
            'shopName' => 'Авоська',
            'shopAddress' => '393729, г. Раменское, ул. Жулебинский Бульвар, дом 81',
            'shopTimeWork' => [
                'Mon' => ['opening' => '8:00', 'closing ' => '21:00'],
                'Tue' => ['opening' => '8:00', 'closing ' => '21:00'],
                'Wed' => ['opening' => '8:00', 'closing ' => '21:00'],
                'Thu' => ['opening' => '8:00', 'closing ' => '21:00'],
                'Fri' => ['opening' => '8:00', 'closing ' => '21:00'],
                'Sat' => ['opening' => '8:00', 'closing ' => '21:00'],
                'Sun' => ['opening' => '8:00', 'closing ' => '21:00'],
            ],
            'shoppingZones' => [
                'Молочный' => [
                    'personal' => [
                        'personalId' => [
                            1 => [
                                'fullName' => 'Филиппов Архип Тимофеевич',
                                'presentPost' => 'старший продавец',
                            ],
                            2 => [
                                'fullName' => 'Жукова Анисья Матвеевна ',
                                'presentPost' => 'продавец',
                            ],
                        ],
                    ],
                    'square' => 120,
                    'fridge' => 3,
                    'storeСounter' => 4,


                ],
                'колбасно-мясной' => [
                    'personal' => [
                        'personalId' => [
                            1 => [
                                'fullName' => 'Романова Сусанна Богдановна ',
                                'presentPost' => 'Заведующий отделом',
                            ],
                            2 => [
                                'fullName' => 'Жукова Анисья Матвеевна ',
                                'presentPost' => 'продавец',
                            ],
                        ],
                    ],
                    'square' => 80,
                    'fridge' => 2,
                    'storeСounter' => 2,

                ],

            ]
        ],

    ];


   

    