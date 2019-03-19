<?php
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
            <form method="post" action="/lesson_7/actions/create.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Введите заголовок">
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Цена">
                </div>


                <?php
                $categories = json_decode(file_get_contents('./store/categories.json'), true)
                ?>
                <div class="form-group">
                    <label for="title">Категория</label>
                    <select name="category" class="form-control" id="category">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Файл</label>
                    <input type="file" class="form-control-file" id="file" accept="image/*" multiple name="image[]">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>

            <?php
            $goods = json_decode(file_get_contents('./store/goods.json'), true)
            ?>
            
            <table>
                <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Описание</th>
                        <th>Цена</th>
                        <th>Картинки</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($goods as $good) :?>
                        <tr>
                            <td><?= $good['title']?></td>
                            <td><?= $good['description']?></td>
                            <td><?= $good['price']?></td>
                            <td>
                                <?php foreach ($good['images'] as $image) : ?>
                                    <img src="<?= $image?>" alt="" width="100">
                                <?php endforeach;?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            
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