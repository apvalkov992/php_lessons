<?php
/**
 * ?sort=price&filter[one]=name&filter[two]=title
 */

require_once 'functions/process.php'
?>

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

            </div>

            <div>
                <pre>

                <?php
                print_r($_POST);

                $result = process($_POST);
                $errors = [];

                if (is_array($result)) {
                    foreach ($result as $field) {
                        $errors[$field] = validateErrors($field);
                    }
                } elseif (is_string($result)) {
                    echo nl2br($result . PHP_EOL);
                }

                ?>
                </pre>
            </div>

            <form action="index.php" method="post">


                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-4">

                    <label for="exampleFormControlSelect1">Категории товара</label>
                    <select name="select[]" class="calc-form-input" id="exampleFormControlSelect1">
                        <?php
                        $categories = require 'data/categories.php';
                        var_dump($users);
                        ?>

                        <?php foreach ($categories as $category) : ?>
                            <option><?= $category?></option>
                        <?php endforeach;?>


                    </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Отобранный товар по категории</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <?php
                        $goods= require_once 'data/goods.php';
                        print_r($goods);
                        $category = $_POST['select'][0];
                        //var_dump($category);
                        ?>

                        <?php foreach ($goods as $key => $good) : ?>
                            <option><?= $good[$category] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="exampleInputGood">New good</label>
                    <input
                        type="good"
                        class="form-control <?= (!isset($errors['good']))? : 'is-invalid'?>"
                        name="good"
                        value=""
                        id="exampleInputGood"
                        placeholder="Введите новый товар">
                    <?php if (isset($errors['good'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['good']?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <label for="exampleInputCategory">Для добавления товара введите его категорию</label>
                    <input
                            type="text"
                            class="form-control <?= (!isset($errors['category']))? : 'is-invalid'?>"
                            name="category"
                            value=""
                            id="exampleInputCategory"
                            placeholder="Категория товара">
                    <?php if (isset($errors['сategories'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['сategories']?>
                        </div>
                    <?php endif;?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



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
