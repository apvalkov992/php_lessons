<?php
//Создать класс Пользователя (набор свойств и методов придумать самим)
class User {
    protected $id;
    protected $userName;
    protected $email;
    protected $phones;
    protected $address;
    protected $firstVisit;
    protected $lastVisit;
    protected $reason;


    public function __construct(){
        print "коннект к БД, таблице users\n";
    }
    public function crudUser(string $crud, string $userName, string $email, string $phone, string $address ){
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
    protected $id;
    protected $title;
    protected $managers;
    protected $suppliers;
    protected $parentCategory;

    public function __construct(){
        print "коннект к БД, таблице categories\n";
    }

    public function crudCategory(string $crud, string $category, string $managers, string $suppliers, string $parentCategory){
        print "работа с таблицей categories \n";
    }
    public function __destruct(){
        print "закрытие коннекта к БД \n";
    }

}

//Создать класс Товар (обязательное свойство категория)
class Good {
    protected $id;
    protected $title;
    protected $description;
    protected $images;
    protected $amount;
    protected $price;
    protected $currency;
    protected $category;
    protected $supplier;
    protected $managers;

    public function __construct(){
        print "коннект к БД, таблице goods \n";
    }

    public function crudGood(string $crud, string $title, string $description, float $amount, float $price, string $currency, Category $category, string $supplier, string $managers){
         print "добавление категории \n";
        $this->category = $category;
        print "работа c БД, с таблицей goods \n";
    }
    public function __destruct(){
        print "закрытие коннекта к БД \n";
    }
}

//Создать класс Корзина (обязательное свойство пользователь, обязательное свойство товары)
class Cart { //extends User{
    protected $idOrder;
    protected $name;
    protected $email;
    protected $phone;
    protected $good;
    protected $amount;
    protected $totalPrice;
    protected $currency;
    protected $paid;
    protected $address;
    protected $open_at;
    protected $closed_at;

    public function __construct(){
        print "коннект к БД, таблице Carts \n";

    }

    public function createCart(string $good, float $amount, $open_at) {
        print "чтение из БД последнего idOrder и создание нового idOrder+1 \n";
        $this->idOrder++;
        $this->addGoodInCart($this->idOrder, $good, $amount );
    }

    public function addGoodInCart(int $idOrder, string $good, float $amount) {
        print "добавление однотипного товара в БД\n";
    }

    public function deleteGoodInCart(int $idOrder, string $good, float $amount) {
        print "удаление однотипного товара(ов) \n";
    }

    public function cleanCart($idOrder) {
        print "удаление всех товаров из корзины \n";
    }

    public function totalSum($idOrder){
        print "чтение корзины и подсчет итоговой суммы заказа \n";
    }

    public function payOrder($idOrder ) {
        print "получение от пользователя данных и оплаты заказа \n";
        User::crudUser('create', $this->name, $this->email, $this->phone, $this->address);
    }

    public function closeOrder($idOrder, $closed_at){
        print "закрытие заказа \n";
    }

    public function __destruct(){
        print "закрытие коннекта к БД \n";
    }
}





