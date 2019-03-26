<?php


class basket
{
    protected $user;

    protected $good;

    protected $amount;

    public function __construct($user, $good, $amount)
    {
        $this->user = $user;
        $this->good = $good;
        $this->amount = $amount;
    }

    public function __destruct()
    {
        echo '<pre>';
        echo 'Здесь отрабатывает метод __destruct для класса basket';
        echo '</pre>';
    }
}

$basket = new basket(   new user(
                                'i.slizh.garik@gmail.com',
                                123456789
                            ),
                        new good(
                                'Бритва',
                                            new category(
                                                        'Хобби',
                                                        0
                                                        ),
                                'bla.bla.bla',
                                '123 00',
                                2,
                                '../12/12/9583713843534568.jpg'
                            ),
                        2);

echo '<pre>';

print_r($basket);