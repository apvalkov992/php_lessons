<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17.02.2019
 * Time: 18:23
 */

define("AGE", 18);
$alcohol = [
    'пиво',
    'водка',
    'вино',
    'коньяк',
    'виски',
    'ром',
    'шампанское'
];
$stopList = [
    'яблоко',
    'банан',
    'мандарин',
    'фейхоа'
];
$minor = 'Продажа алкоголя запрещена лицам до 18 лет';
$ban = 'На данный товар стоит запрет на продажу';
$account = 'На вашему счету недостаточно средств';
$price = 1129;
$cash = 1130;
$oddMoney = $cash - $price;
$sum = 'Ваша покупка составила'.' '.$price.' '.'р';
$change = 'Ваша сдача'.' '.$oddMoney.' '.'р';
$good = 'Благодарим за покупку!!!';

if (AGE < 18 && in_array('пиво', $alcohol)){
    echo $minor;
}elseif (in_array('осетр', $stopList)){
    echo $ban;
}elseif ($price > $cash){
    echo $account;
}else {
    echo $sum;
    echo ' <br/>';
    echo $change;
    echo ' <br/>';
    echo $good;
}