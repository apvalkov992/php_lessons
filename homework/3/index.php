<?php  
 
require 'setting.php';

define (EIGHTIN_EARS, 18);
$buyer_age = 28;
$buyer_cash = 1000;
$amount = 350;
$alcohol = true or false;
$procentOfDiscount = 5;
$discount = $amount / 100 * $procentOfDiscount;
$totalAmount = $amount - $discount;
$change = $buyer_cash - $totalAmount;

echo "<hr>";
echo nl2br ($shop[requisites]['name'] . PHP_EOL);
echo nl2br ($shop[requisites]['address'] . PHP_EOL);
echo nl2br ($shop[alcoholSection]['name'] . PHP_EOL);

echo "<hr>";
if ($cards [2][ban] == TRUE) {
  echo nl2br ('Карта заблокирована' . PHP_EOL);
}
  elseif ($cards [2][ban] !== TRUE) {
    echo nl2br ('Карта ативна' . PHP_EOL);
  }

echo "<hr>";
if ($buyer_age < EIGHTIN_EARS and $alcohol == true) {
    echo "покупатель несовершеннолетний, в товарах присутствует алкоголь"; 
  } 
  else {
    echo "Cумма покупки $amount рублей, <br>получено денег от покупателя $buyer_cash рублей, <br>скидка составила $discount рублей, <br>к оплате: $totalAmount, сдача: $change<br>";

    if ($buyer_cash >= $totalAmount) {
    echo "Оплата покупки произведена<br>";
    }
    elseif ($buyer_cash < $totalAmount) {
    echo "недостаточно средств для оплаты товаров<br>";
    }  
if ($buyer_cash === $totalAmount + $change) {
      echo "Спасибо за покупку<br>";
      } 
    }  

echo "<hr>";
echo nl2br ($shop[alcoholSection][TimeOfWork]['monday'] . PHP_EOL) . nl2br ($shop[alcoholSection][TimeOfWork]['tuesday'] . PHP_EOL) . nl2br ($shop[alcoholSection][TimeOfWork]['wednesday'] . PHP_EOL) . nl2br ($shop[alcoholSection][TimeOfWork]['thursday'] . PHP_EOL) . nl2br ($shop[alcoholSection][TimeOfWork]['friday'] . PHP_EOL) . nl2br ($shop[alcoholSection][TimeOfWork]['saturday'] . PHP_EOL) . nl2br ($shop[alcoholSection][TimeOfWork]['sunday'] . PHP_EOL);
?>
