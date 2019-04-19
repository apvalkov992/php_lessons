<?php 
    class Basket {

        private const LENGTH = 430;
        private const WIDTH = 300;
        private const HEIGHT = 225;

        public $user;
        public $goods = [];

        public function show() {
            echo 'А вот что в моей корзине: ';
            foreach ($this->goods as $good) {
                echo $good. ' ';
            }
            echo '<br>';
        }

        public function add($goods) {
            $this->goods[] = $goods->name;
        }

        public function __construct($user) {
            $this->user = $user;
        }

        public function showSize() {
            echo 'Размеры корзины:'.'<br>';
            echo 'Длина: ' .self::LENGTH.'<br>';
            echo 'Ширина: '.self::WIDTH .'<br>';
            echo 'Высота: '.self::HEIGHT.'<br>';
        }

        public function showOwner() {
            echo 'Владелец корзины: ';$this->user->showName(); echo '<br>';
        }
    }