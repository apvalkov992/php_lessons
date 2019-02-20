<?php
    require_once("config.php");

    echo nl2br("{$shop[0]['blacklistCards'][0]}" . ' = ' . "{$cards[3]['number']}" . PHP_EOL);
    echo $shop[0]['blacklistCards'][0] == $cards[3]['number'] ? "равны" : "не равны";

?>