<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<?php

/* @var $this yii\web\View */

$this->title = 'Товары';
?>
<div class="col-md-8 col-md-offset-2">
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Cтатус</th>
                <th>id категории</th>
                <th>Описание</th>
                <th>Дата создания</th>
                <th>Дата обновления</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($goods as $good) : ?>
                <tr>
                    <td><?= $good->id; ?></td>
                    <td><?= $good->title; ?></td>
                    <td><?= $good->price; ?></td>
                    <td><?= $good->status; ?></td>
                    <td><?= $good->category_id; ?></td>
                    <td><?= $good->description; ?></td>
                    <td><?= $good->created_at; ?></td>
                    <td><?= $good->updated_at; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
    <a href="<?= Url::home().'goods/add';?>" class="btn-primary">Добавить</a>
    <a href="<?= Url::home().'goods/remove';?>" class="btn-primary">Удалить</a>
    <a href="<?= Url::home().'goods/update';?>" class="btn-primary">Обновить</a>
    <a href="<?= Url::home().'goods/good';?>" class="btn-primary">Товар</a>
</div>
