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
            <div class="alert alert-success">

            </div>
            <?php
                require_once 'data/users.php';
            ?>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>login</th>
                    <th>email</th>
                    <th>rule</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) :?>
                    <tr>
                        <td><?= $user['id']?></td>
                        <td><?= $user['name']?></td>
                        <td><?= $user['login']?></td>
                        <td><?= $user['email']?></td>
                        <td><?= $user['rule']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>

            </table>

            <?php
                require_once 'data/categories.php';
            ?>

            <ul class="list-group">
                <?php foreach ($categories as $category) : ?>

                    <li class="list-group-item"><?= $category?></li>

                <?php endforeach;?>
            </ul>

            <?php
            require_once 'data/goods.php';


            ?>

            <div class="row">
                <?php foreach ($goods as $good) :?>
                    <div class="card col-md-6">
                        <img class="card-img-top" src="data/<?= $good['img']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $good['title']?></h5>
                            <p class="card-text"><?= $good['description']?></p>
                            <h3 align="right" class="card-header" style="color: red;"><?= $good['price']?></h3>
                        </div>
                    </div>
                <?php endforeach;?>
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