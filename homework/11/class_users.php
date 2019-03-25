<?php
    
    class User {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }


        public function sayHi() {
            echo 'Привет меня зовут '.$this->name.'. Мне '.$this->age.'<br>';
        }

        public function showName() {
            echo $this->name;
        }
    }