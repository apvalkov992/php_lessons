<?php
    $cards = [
        [
            'bank'        => 'Наш банк',
            'typeofCard'  => 'visa',
            'number'      => '1234 5678 9012 1234',
            'CVV'         => 1234,
            'validity'    => 2020,
            'PIN'         => 12345,
            'owner'       => 'Eugene Pupkin',
            'discount'    => 5
        ],
        [
            'bank'        => 'БАНк',
            'typeofCard'  => 'master card',
            'number'      => '4321 8765 2109 4321',
            'CVV'         => 4321,
            'validity'    => 2019,
            'PIN'         => 54321,
            'owner'       => 'Taras Kudryavkin',
            'discount'    => 3
        ],
        [
            'bank'        => 'Rocket Bank',
            'typeofCard'  => 'master card',
            'number'      => '1111 2222 3333 4444',
            'CVV'         => 4433,
            'validity'    => 2020,
            'PIN'         => 11223,
            'owner'       => 'Fedor Stepanov',
            'discount'    => 15
        ],
        [
            'bank'        => 'Rocket Bank',
            'typeofCard'  => 'visa',
            'number'      => '1111 1111 1111 1111',
            'CVV'         => 3344,
            'validity'    => 2019,
            'PIN'         => 11111,
            'owner'       => 'Mariya Stepanova',
            'discount'    => 10
        ]
    ];

    $shop = [
        [
            'blacklistCards'  => [
                '1111 1111 1111 1111',
                '4321 8765 2109 4321'
            ],
            'blacklistByuers' => [
                'Mariya Stepanova'
            ],
            'openingTime'     => '8:30',
            'closeTime'       => '22:00',
            'address'         => 'st. Pushkina 23, h. Colotushkina 1',
            'ourPoints'       => [
                'st. Pushkina 1, h. Zubkova 79',
                'st. Motorino 7, h. 1',
                'st. Motorino 89, h. 5',
            ]
        ],
        [
            'blacklistCards'  => [
            ],
            'blacklistByuers' => [
                'Eugene Pupkin'
            ],
            'openingTime'     => '8:00',
            'closeTime'       => '20:00',
            'address'         => 'st. Kudatuda 4, h. 3',
            'ourPoints'       => [
                'st. Chtoto 1, h. 5'
            ]
        ],
    ];
?>