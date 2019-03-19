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

                <?php
                    $a = 2;

                    function name($a) {
                        $a++;

                        return $a;
                    }

                    $a = name($a);

//                    var_dump($a);


                    function fullName(string $firstName, string $secondName, string $middleName): string {
                        return $firstName . ' ' . $secondName . ' ' . $middleName;
                    }

                    echo nl2br(fullName('Вася', 'Пупкин', 'Иванович') . PHP_EOL);
                //      0  1   key         bool           6       7
                $arr = [2, 3, 'key' => 5, 'bool' => true, 6 => 2, 9];

                    function searchElementInArray(array $arr, Closure $callback, $key = null){
                        $result = [];

                        foreach ($arr as $item) {
                            $result[] = $callback($item);
                        }

                        return $result;
                    }

                    $a = 'fullName'; //string

                    /*$a = function (array $arr, $key = null){
                        return $arr;
                    };*/ // callback

//                $a = 1;
                var_dump($a('Вася', 'Пупкин', 'Иванович'));
                echo '<pre>';

//                    var_dump($a($arr));




//                    var_dump($a($arr));

                    /*searchElementInArray($arr, function ($elem) {
                        return $elem * 2;
                    });*/

                    $a = [18, 24,28, 33, 22, 12, 11];
                    $c = function () {
                        return 5;
                    };


                    $b = array_map(function (int $elem) use ($c, $arr) {
                        return $elem * $c();
                    }, $a);

                    $a = 'Hellolo';

                    for ($i=0; $i < strlen($a); $i++) {
                        echo $a[$i];
                    }


                    $g = array_filter($a, function ($elem) {
                        return $elem > 18;
                    });

//                    print_r($g);

                    function sum ($arr) {
                        $result = [];

                        foreach ($arr as $value) {
                            $result[] = $value + 2;
                        }

                        return $result;
                    }

                    function multiply ($arr) {
                        $result = [];

                        foreach ($arr as $value) {
                            $result[] = $value * 2;
                        }

                        return $result;
                    }

                    function concatLabel ($arr) {
                        $result = [];

                        foreach ($arr as $value) {
                            $result[] = $value . 'ООО';
                        }

                        return $result;
                    }


                    function search(array $arr, Closure $callback){
                        $result = [];

                        foreach ($arr as $value) {
                            $result[] = $callback($value); //2 // 4// 6
                        }

                        return $result;
                    }


                    $d = [1,2,3,4,56,7];
                    $f = function ($elem) {
                        return $elem * 2;
                    };

                    print_r(search($d, $f))

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