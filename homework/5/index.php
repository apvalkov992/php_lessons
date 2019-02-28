<?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officiis quo, aut! Qui, ipsa, illum ab corporis et maiores veritatis, animi atque excepturi optio tempore deserunt. Iure tempore numquam tempora voluptate dolores. Aperiam quam quia accusantium perferendis nobis ducimus ratione cum libero tenetur quibusdam, ex voluptatibus laudantium animi eveniet eius.";
    function expl (string $s, string $delim ) : array {
        $arr = [];
        for ($i=0, $key = 0; $i < strlen($s); $i++) {
            if ($s[$i] != $delim) {
                $arr[$key] .= $s[$i];
            }
            else {
                $key++;
                continue;
            }
        }
        return $arr;
    }
    print_r(expl($str,','));

    echo '<br>';
    echo '<br>';
    
    function subS (string $s, int $start, int $len = 0 ) : string {
        if ($len == 0) 
            $len = strlen($s);

        $newStr = '';
        for ($i=$start; $i < $len; $i++) {
            $newStr .= $s[$i];
        }
        return $newStr;
    }
    echo subS($str,5,12);

    echo '<br>';
    echo '<br>';   


    $array = ['abcdef','gh','ij','k',' ','lmnop','qrst','uv',' ','wxyz'];
    $initial = "1";
    function a_reduce (array $arr, Closure $calb, $init = NULL) {
        $res;
        if ($init) {
            $res = $calb($res,$init);
        }
        for ($i=0; $i < count($arr); $i++) { 
            $res = $calb($res,$arr[$i]);
        }
        return $res;
    }
    print_r(a_reduce($array, function($carry, $item) {
        $carry .= $item;
        return $carry;
    },$initial));
?>