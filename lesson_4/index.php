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
                    $config = require_once 'config/config.php';

//                        0  1  2  3  4  5  6  7  8  9
                    $a = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];


                    /*for ($i = 0; $i <= 10; $i++) {
                        echo $i . '=';
                        echo nl2br($a[$i] . PHP_EOL);
                    }

                    echo "<hr>";
                    $i = 0;

                    while ($i <= 10) {
                        echo $i . '=';
                        echo nl2br($a[$i] . PHP_EOL);
                        $i++;
                    }

                    echo "<hr>";

                    $i = 0;
                    do {
                        echo $i . '=';
                        echo nl2br($a[$i] . PHP_EOL);
                        $i++;
                    } while($i <= 10);*/


                    echo '<pre>';

                    $total = 12000;
                    $cardType = CARD_TYPE_MIR;

                    foreach ($config['discount'] as $key => $value) {
                        var_dump($key);
                        var_dump($value['condition']($total));
                        echo "<hr>";
                    }

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