<?php
class category
{
    public $title;
    public $parentCategory;

    public function __construct($title, $parentCategory = null)
    {
        $this->title = $title;
        $this->parentCategory = $parentCategory;
    }

}

var_dump($category1 = new category('Комплектующие'));
var_dump($category2 = new category('Процессоры',$category1->title));
