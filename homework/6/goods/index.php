<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div>
                <pre>
                <?php
                /*print_r($_POST);*/

                require_once 'functions/process.php';

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
                <div class="form-group">
                    <label for="exampleFormControlInput1">Название товара</label>
                    <input type="text"
                           class="form-control <?= (!isset($errors['title']))? 'is-valid' : 'is-invalid'?>"
                           name="title" id="exampleFormControlInput1"
                           value="<?= (count($errors) > 0) ? $_POST['title'] : ''?>"
                           aria-describedby="titleHelp"
                           placeholder="Введите название товара">
                    <?php if (isset($errors['title'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['title']?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Описание товара</label>
                    <textarea
                            class="form-control <?= (!isset($errors['description']))? 'is-valid' : 'is-invalid'?>"
                            name="description"
                            id="exampleFormControlTextarea1"
                            rows="6"></textarea>
                    <?php if (isset($errors['description'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['description']?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Введите цену товара</label>
                    <input
                            type="text"
                            class="form-control <?= (!isset($errors['price']))? 'is-valid' : 'is-invalid'?>"
                            name="price"
                            id="exampleFormControlInput2"
                            aria-describedby="priceHelp"
                            value="<?= (count($errors) > 0) ? $_POST['price'] : ''?>"
                            placeholder="Цена">
                    <?php if (isset($errors['price'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['price']?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Валюта</label>
                    <select
                            class="form-control <?= (!isset($errors['currency']))? 'is-valid' : 'is-invalid'?>"
                            name="currency"
                            id="exampleFormControlSelect1">
                            <option value="">Выберите валюту из выпадающего списка</option>
                        <?php
                            $currencies = require 'data/currency.php';
                        ?>
                        <?php foreach ($currencies as $currency) : ?>
                            <option><?= $currency['name']?></option>
                        <?php endforeach;?>
                    </select>
                    <?php if (isset($errors['currency'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['currency']?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="custom-file" style="margin-bottom: 1rem;">
                    <input
                            type="file"
                            name="image"
                            class="custom-file-input <?= (!isset($errors['image']))? 'is-valid' : 'is-invalid'?>"
                            id="validatedCustomFile"
                            required
                    >
                    <label class="custom-file-label"
                           for="validatedCustomFile">Загрузите изображение</label>
                    <?php if (isset($errors['image'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['image']?>
                        </div>
                    <?php endif;?>
                </div>
                <button type="submit" class="btn btn-info">Отправить</button>
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
<script>
    document.getElementById("exampleFormControlTextarea1").value = "<?= (count($errors) > 0) ? $_POST['description'] : ''?>";
    document.getElementById("exampleFormControlSelect1").value = "<?= (count($errors) > 0) ? $_POST['currency'] : ''?>";
</script>
</body>
</html>