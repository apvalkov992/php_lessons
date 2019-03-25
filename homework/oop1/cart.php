<?php

class cart
{
    public $goods;
    public $buyer;
    public $sum;

    public function __construct($buyer)
    {
        $this->buyer = $buyer;
    }
    public function addGoods($goods)
    {
        $this->goods[] = $goods;
    }
    public function delGoods($goods)
    {

    }
    public function totalSum($goods)
    {

    }
    public function pay(){

    }
}

$cart1 = new cart(123);
$goods1 = ['процеccор', 2000, 1];
$goods2 = ['mb', 2000, 1];
$cart1 ->addGoods($goods1);
$cart1 ->addGoods($goods2);
var_dump($cart1);