<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body></body>
</html>
<?php
    require("base.php");
    echo nl2br($shopList[0]['blackListCards'][0] === $cardList[1]['cardNumber'] ? "Совпадения номера карты с чёрным списком не найдены".PHP_EOL : "Есть совпадения с чёрным списком!".PHP_EOL);
    echo nl2br($shopList[0]['blackListByuers'][0] === $cardList[2]['owner'] ? "Покупатель находится в чёрном списке!".PHP_EOL : " Покупатель не находится в чёрном списке!".PHP_EOL);
   print_r($shopList[0]['counters']);
?> 