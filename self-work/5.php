<?php
    $mas = [
        'a',
        1,
        'g',
        '4',
        9
    ];
    function searchInMas(array $m, /* int */$k) {
        foreach ($m as $key => $value) {
            if ($key ==/*=*/ $k) {
                return $value;
            }
        }
        //return null;
    }
    echo searchInMas($mas, 1);
    echo '<br>';
    function abc(Closure $callback) {
        $a = 1 + 2;
        echo $callback($a);
    }

    abc(function($a){
        echo $a.'<br>';
        $a = 2;
        echo $a.'<br>';
    })
?>
