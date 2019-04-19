<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<div class="col-md-8 offset-md-2">
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
</div>