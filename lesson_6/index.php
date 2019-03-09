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

            <form action="/lesson_6/index.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input
                        type="email"
                        class="form-control <?= (!isset($errors['email']))? : 'is-invalid'?>"
                        name="email"
                        value="<?= (count($errors) > 0) ? $_POST['email'] : ''?>"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Введите email">
                    <?php if (isset($errors['email'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['email']?>
                        </div>
                    <?php endif;?>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input
                        type="password"
                        class="form-control <?= (!isset($errors['password']))? : 'is-invalid'?>"
                        name="password"
                        value=""
                        id="exampleInputPassword1"
                        placeholder="Введите пароль">
                    <?php if (isset($errors['password'])):?>
                        <div class="invalid-feedback">
                            <?= $errors['password']?>
                        </div>
                    <?php endif;?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <?php
                            $users = require $_SERVER['DOCUMENT_ROOT']. '/lesson_6/data/users.php';
                        ?>

                        <?php foreach ($users as $user) : ?>
                            <option><?= $user['email']?></option>
                        <?php endforeach;?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
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
