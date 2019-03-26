<?php

require_once 'app/User.php';
require_once 'app/Product.php';
require_once 'app/Category.php';
require_once 'app/Cart.php';

function debug($data)
{
    echo '<pre>'. print_r($data, 1) .'</pre>';
}


//Пользователи
$newUser = new User;
$newUser->addUser(1,'Bob_Marley', 'jamaica@ya.ru', 'Sun Is Shining');
$newUser->addUser(2,'Chuck_norris', 'chuk@gmail.com', 'qwerty');

debug($newUser);

//Категории
$newCategory = new Category();
$newCategory->addCategory('1', 'Овощь');
$newCategory->addCategory('2', 'Фрукт');
$newCategory->addCategory('3', 'Что ты такое?');

debug($newCategory);

//Продукты
$newProducts = new Product;
$newProducts->addProduct(1, 'Огурец', $newCategory->category[1]['title'], 50.2);
$newProducts->addProduct(2, 'Помидор', $newCategory->category[1]['title'], 14.2);
debug($newProducts);


//Корзины
$newCart = new Cart;
$newCart->addCart(1, $newUser->users[1], $newProducts->products[1], 3.5);
$newCart->addCart(2, $newUser->users[1], $newProducts->products[0], 4);
debug($newCart);

echo 'Сумма покупки: ' . $newCart->shopingPrice(1) . 'р.';

