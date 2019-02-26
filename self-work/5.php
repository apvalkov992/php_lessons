<?php
    $mas = [
        'a',
        1,
        'g',
        '4',
        9
    ];
    function searchInMas($m, $k) { // массив, номер
        foreach ($m as $key => $value) {
            if ($key == $k) {
                $el=$value;
                return $el;
            }
        }
    }
    echo searchInMas($mas, 4)
?>
