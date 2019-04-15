<?php


class good
{
    protected $title;

    protected $categoryId;

    protected $description;

    protected $price;

    protected $currencyId;

    protected $images;

    public function __construct($title, $categoryId, $description, $price, $currencyId, $images)
    {
        $this->title = $title;
        $this->categoryId = $categoryId;
        $this->description = $description;
        $this->price = $price;
        $this->currencyId = $currencyId;
        $this->images = $images;
    }

    public function __destruct()
    {
        echo '<pre>';
        echo 'Здесь отрабатывает метод __destruct для класса good';
        echo '</pre>';
    }
}

$good = new good(       'Бритва',
                                new category('Хобби', 0),
                    'bla.bla.bla',
                        '123 00',
                    2,
                        '../12/12/9583713843534568.jpg');

echo '<pre>';

print_r($good);