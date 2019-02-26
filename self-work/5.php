<?php
    $mas = [
        'a',
        1,
        'g',
        '4',
        9
    ];
    function searchInMas(array $m, int $k) { // массив, номер
        foreach ($m as $key => $value) {
            if ($key == $k) {
                return $value;
            }
        }
    }
    echo searchInMas($mas, 4);
?>
