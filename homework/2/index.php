<?php
    $buyersNameId1 = 'Василий';
    $buyersAgeId1 = 18;
    $buyingPowerId1 = 700;

    $buyersNameId2 = 'Елена';
    $buyersAgeId2 = 30;
    $buyingPowerId2 = 250;


    //Наличные в кассах №1 и №2
    $supermarketCashboxId1 = 1120;
    $supermarketCashboxId2 = 220;

    //Товары
    $goods = ['Водка Белочка', 'алкоголь', 100, 'Яблоко Голден', 'фрукты', 50, 'шоколад Аленка', 'шоколад', 100];
    //$appleId1 = ['Яблоко Голден', 'фрукты', 50];
    //$chocolateId1 = ['шоколад Аленка', 'шоколад', 1000];





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Домашняя работа №2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="alert alert-success" role="alert">

  <div class="container-fluid">
  <span>Сегодня в наш замечательный магазин пожаловали покупатели.<span>
  
    <div class="row">
        <div class="col-sm-2">
            
            <div class="card" style="width: 10rem;">
                <img src="img\Vasiliy.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $buyersNameId1 ?></h5>
                    <p class="card-text">Возраст: <?= $buyersAgeId1 ?><br>Наличные: <?= $buyingPowerId1 ?></p>
                </div>
            </div>
        
        </div>

        <div class="col-sm-2">
            
            <div class="card" style="width: 10rem;">
                <img src="img\Helen.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $buyersNameId2 ?></h5>
                    <p class="card-text">Возраст: <?= $buyersAgeId2 ?><br>Наличные: <?= $buyingPowerId2 ?></p>
                </div>
            </div>
        
        </div>

        <div class="col-sm-2">
            
            <div class="card" style="width: 10rem;">
                <img src="img\cash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= "Касса" ?></h5>
                    <p class="card-text">Наличные в кассе: <?= $supermarketCashboxId1 ?></p>
                </div>
            </div>
        
        </div>
    
    <!-- Покупки -->
        <div class="col-sm-6">
            <div class="alert alert-light" role="alert">
                 <?php
                 $shoping1 = 0;
                 echo "$buyersNameId1 захотел(а) купить $goods[$shoping1] по цене " . $goods[$shoping1+2] . " рублей<br>";
                 //проверка на возраст и категорию товара алкоголь
                 if (!($buyersAgeId1 < 18 && $goods[$shoping1+1] === 'алкоголь')) {
                     echo "Кассир: к оплате " . $goods[$shoping1+2] . "рублей<br>";
                     //проверка на достаточность средств к оплате товара
                     if (!($buyingPowerId1 < $goods[$shoping1+2])) {
                        //проверка на возможность кассы выдать сдачу 
                        if (!($buyingPowerId1-$goods[$shoping1+2] >= $supermarketCashboxId1)) {
                            //проверка на необходимость выдачи сдачи покупателю
                            if ($buyingPowerId1 != $goods[$shoping1+2]) {
                                //Сообщение об удачной покупке * если сумма полученная от покупателя больше суммы покупки
                                echo "Удачная покупка $$$ !!! т.к. у $buyersNameId1 есть $buyingPowerId1 рублей )))<br>";
                                $buyingPowerId1 -= $goods[$shoping1+2];
                                echo "Кассир: Возьмите сдачу - $buyingPowerId1 рублей<br>"; 
                            } else {
                                $buyingPowerId1 -= $goods[$shoping1+2];
                            }
                            $supermarketCashboxId1 += $goods[$shoping1+2];
                            echo "У $buyersNameId1 осталось $buyingPowerId1 рублей<br>";
                            echo "Кассир: Cпасибо за покупку, приходите еще!<br>";
                            echo "Кассовый аппарат наличные: $supermarketCashboxId1<br>";

                        } else {
                            echo "Кассир: Извените, я не могу смогу дать Вам сдачу.";
                        }
                        
                     
                    } else {
                        echo "$buyersNameId1 cмотрит в свой кошелек, понимает что ему не достаточно средств расплатится.";
                    }
                 } else {
                    echo "$buyersNameId1 , продажа алкогольных изделий лицам не достигшим 18 лет запрещена!";
                 }
                 
                 ?>
            </div>
        </div>

    </div>
  </div>




</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>







