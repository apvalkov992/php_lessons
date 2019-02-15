<?php

    define('ADULTHOOD',18);
    $products = 'beer';
    $customerAge = 10;

    $message = 'Спасибо за покупку!';
    $wrongAge = 'Слышь малой, молоко из под носа вытри!';
    $wrongSum = 'Нужно больше золота';

    $customerAmount = 100;
    $productPrice = 50;



    if ($customerAge >= ADULTHOOD) 
        echo $message.'<br>';
    else
        echo $wrongAge.'<br>';
    
    $mes = ($customerAge >= ADULTHOOD) ? $message : $wrongAge;
    echo $mes.'<br>';
?>

<?php
    if ($customerAge >= ADULTHOOD) :
?> 
    <span style="color: green"><?php echo $message.'<br>';?></span>
<?php
    else :
?>
    <span style="color: red"><?php echo $wrongAge.'<br>';?></span>
<?php
    endif;
?>

<?php

    $customerAge = 21;
    $customerAmount = 40;
    if ($customerAge >= ADULTHOOD && $customerAmount >= $productPrice) 
        echo $message.' Ваша сдача: '. ($customerAmount - $productPrice) .'руб.'.'<br>';
    else if ($customerAmount <= $productPrice)
        echo $wrongSum.'<br>';
    else 
        echo $wrongAge.'<br>';

    $customerAmount = 60;
    if ($customerAge >= ADULTHOOD && $customerAmount >= $productPrice) 
        echo $message.' Ваша сдача: '. ($customerAmount - $productPrice) .'руб.'.'<br>';
    else if ($customerAmount <= $productPrice)
        echo $wrongSum.'<br>';
    else 
        echo $wrongAge.'<br>';

?>
