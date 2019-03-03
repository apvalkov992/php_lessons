<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid mb-2">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">WebDevelopmentCourse</a>
            </nav>
        </div>

    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success">

                <h5> Домашнее задание № 5 </h5>
                <?php
                /*
                    * Написать функцию аналог `explode`
                    * Написать функцию аналог  `substr`
                    * Написать функцию аналог `array_reduce`
                */
                //------------------------------------------------------------------------------------
                //  Написать функцию аналог `explode` Разбивает строку с помощью разделителя $delimiter
                //            explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ) : array
                $string = 'Waaag*Какой чудесный день,Waaag*Работать мне не лень,Waaag*Со мной мои друзья и песенка мояWaaag*';
                $delimiter = 'Waaag*';
                $limit = 4;
                echo ' `my_explode` аналог `explode` <br>';
                echo "string = $string <br>";
                echo "delimiter = $delimiter <br>";
                echo "limit = $limit <br>";
                //echo '<br>';
                echo " explode : <br>";
                print_r( explode ($delimiter, $string ,$limit ));    //оригинальная встроенная функция explode
                function my_explode ( string $delimiter , string $string , int $limit  ): array {
                    //function my_explode ( $delimiter , $string , $limit  ){//: array {
                    $result = [];
                    $Start = 0;
                    $count = substr_count ($string, $delimiter );
                    for ($i=0; $i <= $count ; $i++){
                        $Stop = strpos ($string, $delimiter, $Start );
                        //echo "$i--$posStop  <br>";
                        if ($i < $count && $i < $limit-1 ) {   //   исправлено, и имена переменных подправлены
                            $result[] = substr($string, $Start, $Stop - $Start ) ;
                            $Start = $Stop + strlen($delimiter);
                        }
                        else {
                            $result[] = substr($string, $Start, strlen($string) - $Start );
                            break;
                        };
                    };
                    return ($result);
                };
                echo "<br> my_explode : <br>";
                print_r(my_explode ($delimiter, $string ,$limit ));
                /*------------------------------------------------------------------------------------------
                 * Написать функцию аналог  `substr`  Возвращает подстроку строки string,
                 *  начинающейся с start символа по счету и длиной length символов.
                 * substr ( string $string , int $start [, int $length ] ) : string
                 * */
                $string = 'The PHP Manual is available online in a selection of languages.';
                $start = -50;
                $length = -20;
                echo '<br><br> `my_substr` аналог `substr` <br>';
                echo "string = $string <br>";
                echo "start = $start <br>";
                echo "length = $length <br>";
                //echo '<br>';
                echo " substr : <br>";
                var_dump(substr ( $string , $start , $length  ));       //оригинальная встроенная функция substr
                function my_substr ( string $string , int $start , int $length  ) : string {
                    //function my_substr (  $string , $start , $length  ) {
                    $result = '';
                    if ($start > strlen($string) || strlen($string) == 0)
                        return false;
                    if ($start + $length > strlen($string))
                        $length = strlen($string) - $start;
                    if ($start > 0 && $length > 0) {
                        while ($length > 0) {
                            $result .= $string[$start];
                            $start++;
                            $length--;
                        }
                        return $result;
                    }
                    //Если start отрицательный, возвращаемая подстрока начинается с позиции,
                    // отстоящей на start символов от конца строки string.
                    if ($start < 0 && $length > 0) {
                        if (-$start > strlen($string))
                            $start = -strlen($string);
                        while ($length > 0) {
                            $result .= $string[strlen($string) + $start];
                            $start++;
                            $length--;
                        }
                        return $result;
                    }
                    // Если length отрицательный, то будет отброшено указанное этим аргументом число символов с
                    // конца строки string (после того как будет вычислена стартовая позиция, если start отрицателен).
                    // Если при этом позиция начала подстроки, определяемая аргументом start, находится
                    // в отброшенной части строки или за ней, возвращается FALSE.
                    if ($start > 0 && $length < 0) {
                        if (strlen($string) + $length - $start < 0) {
                            return false;
                        }
                        while ($start < strlen($string) + $length) {
                            $result .= $string[$start];
                            $start++;
                        }
                        return $result;
                    }
                    if ($start < 0 && $length < 0) {
                        if ($start > $length)
                            return $result;
                        if (-$start > strlen($string))
                            $start = -strlen($string);
                        while ($start < $length) {
                            $result .= $string[strlen($string) + $start];
                            $start++;
                        }
                        return $result;
                    }
                }
                echo "<br> my_substr : <br>";
                var_dump(my_substr ( $string , $start , $length  ));
                //------------------------------------------------------------------------------
                //* Написать функцию аналог `array_reduce`
                //array_reduce — array_reduce() итеративно применяет callback-функцию callback к элементам
                // массива array и, таким образом, сводит массив к единственному значению.
                //array_reduce ( array $array , callable $callback [, mixed $initial = NULL ] ) : mixed
                // callback - callback ( mixed $carry , mixed $item ) : mixed
                // carry - Содержит результирующее значение с предыдущей итерации; в случае же первой итерации
                // содержит значение параметра initial.
                // item - Содержит значение текущей итерации.
                // initial - Если передан необязательный параметр initial, то он будет использован в начале процесса,
                // или в качестве окончательного результата в случае пустого массива.
                // Если массив пуст и не передан параметр initial, array_reduce() вернет NULL.
                echo '<br><br> `my_array_reduce` аналог `array_reduce` <br>';
                function sum($carry, $item)
                {
                    $carry += $item;
                    return $carry;
                }
                function product($carry, $item)
                {
                    $carry *= $item;
                    return $carry;
                }
                $a = array(1, 2, 3, 4, 5);
                $x = array();
                echo " array_reduce : <br>";
                var_dump(array_reduce($a, "sum")); // int(15)   //оригинальная встроенная функция array_reduce
                var_dump(array_reduce($a, "product", 10)); // int(1200), потому что: 10*1*2*3*4*5
                var_dump(array_reduce($x, "sum", "Нет данных")); // string(19) "Нет данных"
                function my_array_reduce ( array $array , callable $callback , $initial  )  {
                    //function my_array_reduce ( $array , callable $callback, $initial ) {
                    $result = 0;
                    if (count($array) == 0)
                        return $initial;
                    $carry = $initial;
                    foreach ($array as $item) {
                        $result = $callback($carry, $item);
                        $carry = $result;
                    }
                    return $result;
                }
                echo '<br>';
                echo " my_array_reduce : <br>";
                var_dump(my_array_reduce($a, "sum", 0)); // int(15); // int(15)
                var_dump(my_array_reduce($a, "product", 10)); // int(1200), потому что: 10*1*2*3*4*5
                var_dump(my_array_reduce($x, "sum", "Нет данных")); // string(19) "Нет данных"
                ?>

            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>