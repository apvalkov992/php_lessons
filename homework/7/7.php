<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Starter Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            .formBlock {
                width: 500px;
                margin: 10px auto;
                border: 1px solid lightGrey;
                padding: 25px;
                border-radius: 5px;
            }
            body {
                color: #17a2b8;
            }
            #buttonSubmit {
                display: block;
                margin: 20px auto;
            }
        </style>
    </head>
    <body>
    <?php
        require_once('validate.php');
        $result = validator($_POST);
        $errors = [];

        if(!is_array($result)) {
            require_once('files.php');
            if ($_POST && $_FILES) {
                savePictures($_POST,$_FILES);
            }
            else {
                $errors[] = true;
            }
        }
        else {
            foreach ($result as $key => $value) {
                $errors[$value] = true;
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <?php  
            if(!is_array($result)) {
                showNewProduct();
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="formBlock">
            <form action="files.php" method="post" enctype="multipart/form-data">
                <span>Введите название продукта:</span>
                <input class="form-control" type="text" placeholder="Название продукта" name="productName">
                <?=($errors['productName']) ? '<span style="color:red;">Проверьте правильность заполнения поля</span>' : '' ;?>

                <div class="form-group">
                    <label for="formRubric">Рубрика</label>
                    <select class="form-control" id="formRubric" name="formRubric">
                        <?php 
                        $handle = fopen("database".DIRECTORY_SEPARATOR."Категории товаров.csv", "r");
                        while (($data = fgetcsv($handle) ) !== FALSE):?>
                            <option>
                            <?php
                                foreach ($data as $value) 
                                    echo $value;
                            ?>  
                            </option>
                        <?php endwhile; fclose($handle);?>
                    </select>
                </div>

                <span>Состояние</span>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="productState" id="stateRadios1" value="Новое" checked>
                    <label class="form-check-label" for="stateRadios1">
                        Новое
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="productState" value="Б/У" id="stateRadios2">
                    <label class="form-check-label" for="stateRadios2">
                        Б/У
                    </label>
                </div>

                <div class="form-group">
                    <label for="formDescription">Описание товара:</label>
                    <textarea class="form-control" id="formDescription" name="description" rows="3"></textarea>
                    <?=($errors['description']) ? '<span style="color:red;">Введите больше символов</span>' : '' ;?>
                </div>

                <div class="row">
                    <div class="col">
                        <span>Введите телефон:</span>
                        <input class="form-control" type="text" placeholder="Телефон" name="contactPhone">
                            <?=($errors['contactPhone']) ? '<span style="color:red;">Проверьте правильность заполнения телефона</span>' : '' ;?>

                    </div>

                    <div class="col">
                        <span>Введите ваш email:</span>
                        <input class="form-control" type="email" placeholder="Email" name="contactEmail">
                        <?=($errors['contactEmail']) ? '<span style="color:red;">Проверьте правильность заполнения email</span>' : '' ;?>

                    </div>
                </div>


                <div class="form-group">
                    <label for="files">Выберите изображения товара</label>
                    <br>
                    <input type="file" name="productFiles[]" accept="image/*"  multiple id="files">
                </div>

                <span>Введите цену продукта:</span>
                <input class="form-control" type="text" placeholder="0.00" name="productCost">
                <?=($errors['productCost']) ? nl2br('<span style="color:red;">Не правильно указана цена!</span>'.PHP_EOL) : '' ;?>
                <input type="submit" class="btn btn-primary" id="buttonSubmit">
            </form>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>