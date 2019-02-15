<?php

    define('ADULTHOOD',18);
    $products = 'beer';
    $customerAge = 10;

    $message = 'Спасибо за покупку!';
    $wrongAge = 'Слышь малой, молоко из под носа вытри!';
    $wrongSum = 'Нужно больше золота';

    $customerAmount = 100;
    $productPrice = 50;

    $customerAge = 15;
    $products = 'beer';
    if ($customerAge > 0 && $customerAge < ADULTHOOD && $products == 'beer') :
?> 
    <span style="color: red"><?php echo $wrongAge.'<br>';?></span>
<?php
    elseif ($customerAge >= ADULTHOOD):
?>
    <span style="color: green"><?php echo $message.'<br>';?></span>
<?php
    else:
?>
    <span style="color: green"><?php echo $message.'<br>';?></span>
<?php 
    endif;
?>

<?php

    $customerAge = 15;
    $customerAmount = 50;
    $products = 'lemonade';

    if ($customerAge > 0 && $customerAge < ADULTHOOD && $products != 'beer' &&  $customerAmount >= $productPrice && $customerAmount != $productPrice) 
        echo $message.' Ваша сдача: '. ($customerAmount - $productPrice) .' руб.'.'<br>';
    else if ($customerAge > 0 && $customerAge < ADULTHOOD && $products == 'beer') 
        echo $wrongAge.'<br>';
    else if ($customerAge >= ADULTHOOD && $customerAmount > $productPrice  && $customerAmount != $productPrice) {
        echo $message.' Ваша сдача: '. ($customerAmount - $productPrice) .' руб.'.'<br>';
    }
    else if ($customerAmount < $productPrice)
        echo $wrongSum.'<br>';
    else {
        echo $message.'<br>';
    }

?>