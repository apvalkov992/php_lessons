<?php
    $cardList = [
        [
            'bankName'    => 'TinkoffBank',
            'cardNumber'  => '1234 5678 9012 1234',
            'CVV'         => 1234,
            'validity'    => 2023,
            'PIN'         => 12345,
            'owner'       => 'Sergei Oduvanov',
            'discount'    => 8
        ],
        [
            'bankName'    => 'TalkBank',
            'cardNumber'  => '2502 8765 2109 3169',
            'CVV'         => 3169,
            'validity'    => 2019,
            'PIN'         => 19091,
            'owner'       => 'Oleg Leonov',
            'discount'    => 13
        ],
        [
            'bankName'    => 'AlphaBank',
            'cardNumber'  => '9865 8325 3064 4444',
            'CVV'         => 4444,
            'validity'    => 2025,
            'PIN'         => 14709,
            'owner'       => 'Andrey Voland',
            'discount'    => 10
        ],
        [
            'bankName'    => 'TalkBank',
            'cardNumber'      => '1663 3666 6135 6219',
            'CVV'         => 6219,
            'validity'    => 2019,
            'PIN'         => 31251,
            'owner'       => 'Viktoria Saravitova',
            'discount'    => 17
        ]
    ];
    $shopList = [
        [
            'blackListCards'  => [
                '2502 8765 2109 3169',
                '1234 5678 9012 1234'
            ],
            'blackListByuers' => [
                'Andrey Voland'
            ],
            'openingTime'     => '9:00',
            'closingTime'     => '20:00',
            'address'         => 'Gornaya 198a st.',
            'deliveryPpoints' => [
                'Stavropolskaya 11 st., second floor',
                'Matrosova 27 ave.',
            ]
        ],
        [
            'blackListCards'  => [
            	'2502 8765 2109 3169'
            ],
            'blackListByuers' => [
                'Viktoria Saravitova'
            ],
            'openingTime'     => '7:00',
            'closeTime'       => '19:00',
            'address'         => 'Grinkevicha st.',
            'deliveryPpoints' => [
                'Severski 15/2 ave.',
                'Privokzalnaya 38 st.'
            ]
        ],
    ];
?> 