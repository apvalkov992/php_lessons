<?php 
    class Goods {
        public $name;
        public $description;
        public $price;
        public $category;

        public function __construct ($name, $description, $price, $category) {
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
        }

        public function showInfo() {
            echo '<br>';
            echo 'Название: '.$this->name.'<br>';
            echo 'Описание: '.$this->description.'<br>';
            echo 'Цена: '.$this->price.'<br>';
            echo 'Категория: ';$this->category->show(); echo '<br>';
        }
    }