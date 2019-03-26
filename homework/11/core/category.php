<?php


class category
{
    protected $name;

    protected $parentId;

    public function __construct($name, $parentId)
    {
        $this->name = $name;
        $this->parentId = $parentId;
    }
    public function __destruct()
    {
        echo '<pre>';
        echo 'Здесь отрабатывает метод __destruct для класса category';
        echo '</pre>';
    }
}

$hobby = new category('Хобби', 0);

echo '<pre>';

print_r($hobby);