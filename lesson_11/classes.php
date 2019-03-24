<?php
//Создать класс Пользователя (набор свойств и методов придумать самим)
class User {
    public $id;
    public $firstName;
    public $lastName;
    public $emails;
    public $phones;
    public $firstVisit;
    public $lastVisit;
    public $ban;


    public function __construct(){
        print "коннект к БД, таблице users\n";
    }
    public function crudUser( string $user, string $crud ){
        print "работа c таблицей users \n";
    }
    public function banUser( string $user, string $reason ){
        print "отключение пользователя в БД\n";
    }
    public function __destruct(){
        print "закрытие коннекта к БД \n";
    }
}

//Создать класс Категории
class Category {
    public $id;
    public $title;
    public $managers;
    public $suppliers;
    public $parentCategory;

    public function __construct(){
        print "коннект к БД, таблице categories\n";
    }

    public function crudCategory(string $category, string $crud){
        print "работа с таблицей categories \n";
    }
    public function __destruct(){
        print "закрытие коннекта к БД \n";
    }

}

//Создать класс Товар (обязательное свойство категория)
class Good {
    public $id;
    public $title;
    public $description;
    public $price;
    public $amount;
    public $category;
    public $supplier;
    public $warranty;

    public function __construct(){
        print "коннект к БД, таблице goods \n";
    }

    public function crudGood(string $good, string $crud, Category $category){
        print "работа c БД, с таблицей goods \n";
        print "добавление категории \n";
        $this->category = $category;
    }
    public function __destruct(){
        print "закрытие коннекта к БД \n";
    }
}

//Создать класс Корзина (обязательное свойство пользователь, обязательное свойство товары)
class Cart {
    public $id;
    public $user;
    public $good;
    public $amount;
    public $totalPrice;
    public $paid;
    public $address;
    public $open_at;
    public $closed_at;

    public function __construct(){
        print "коннект к БД, таблице Carts \n";
    }

    public function createCart(string $user, string $good, float $amount){
        print "создание нового заказа \n";
        $this->addGoodInCart($user, $good, $amount);
    }

    public function addGoodInCart(string $user, string $good, float $amount){
        print "добавление однотипного товара в БД\n";
    }

    public function deleteGoodInCart($idOrder){
        print "удаление однотипного товара(ов) \n";
    }

    public function cleanCart($idOrder){
        print "удаление всех товаров из корзины \n";
    }

    public function totalSum($idOrder){
        print "чтение корзины и подсчет итоговой суммы заказа \n";
    }

    public function payOrder(){
        print "оформление и оплата заказа \n";
    }

    public function closeOrder($idOrder){
        print "закрытие заказа \n";
    }

    public function __destruct(){
        print "закрытие коннекта к БД \n";
    }
}





