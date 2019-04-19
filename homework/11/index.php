<?php
    require_once 'class_users.php';
    require_once 'class_basket.php';
    require_once 'class_category.php';
    require_once 'class_goods.php';

    $Zhenya = new User('Евгений',27);
    $Zhenya->sayHi();

    $basket_1 = new Basket($Zhenya);
    $basket_1->show();

    $vegetables = new Category('Овощи');
    $fruits = new Category('Фрукты');

    $cucumber = new Goods('Огурец','Огурец Сергей с очень длинной биографией',30, $vegetables);
    $cucumber->showInfo();

    $apple = new Goods('Яблоко', 'Яблоко с предисторией',50, $fruits);
    $apple->showInfo();

    $basket_1->add($cucumber);
    $basket_1->add($cucumber);
    $basket_1->add($cucumber);
    $basket_1->show();
    echo '<br>';
    $basket_1->showSize();
    echo '<br>';
    $basket_1->add($apple);
    $basket_1->show();

    $basket_2 = new Basket($Zhenya);
    $basket_2->showOwner();
    $basket_2->show();
    $basket_2->add($apple);
    $basket_2->show();
