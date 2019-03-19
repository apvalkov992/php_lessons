<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home work 7</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php require_once 'data/categorygoods.php'?>
<?php require_once 'functions/displayCategori.php'?>
<?php require_once 'functions/processor.php'?>


<?php if (!empty($_POST)):?>
        <?php $result = addGoods($_POST); ?>
<?php endif;?>


<?php if (isset($result['add'])):?>
    <div class="alert alert-success">
        <?php echo ($result['add']); ?>
    </div>
<?php endif;?>



<div class="container-fluid mb-2">
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Наименование товара</label>
        <input type="text" class="form-control" name="goodsName" value="<?=$_POST['goodsName']?>" placeholder="Введите наименование товара">
    </div>
    <?php if (isset($result['goodsName'])):?>
        <div class="alert alert-danger">
            <?php echo ($result['goodsName']); ?>
        </div>
    <?php endif;?>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Категория товара</label>
        <select name="categori" class="form-control">
            <option selected value=''></option>
            <?php displayCategori($categoryGoods); ?>
        </select>
        <?php if (isset($result['categori'])):?>
            <div class="alert alert-danger">
                <?php echo ($result['categori']); ?>
            </div>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Цена товара</label>
        <input type="text"  name="price" class="form-control"  placeholder="Введите цену товара">
    </div>
    <?php if (isset($result['price'])):?>
        <div class="alert alert-danger">
            <?php echo ($result['price']); ?>
        </div>
    <?php endif;?>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Описание товара</label>
        <textarea class="form-control" name="goodsDescription" rows="5"></textarea>
    </div>
    <?php if (isset($result['goodsDescription'])):?>
        <div class="alert alert-danger">
            <?php echo ($result['goodsDescription']); ?>
        </div>
    <?php endif;?>
    <div class="form-group">
        <label for="exampleFormControlFile1">Добавить изображение</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*" name="image">
    </div>
    <?php if (isset($result['file'])):?>
        <div class="alert alert-danger">
            <?php echo ($result['file']); ?>
        </div>
    <?php endif;?>
    <button type="submit" class="btn btn-primary">Добавить товар</button>
</form>
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