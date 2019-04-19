<?php
namespace app\models;

use app\queries\GoodsQuery;

use yii\data\ActiveDataProvider;

class GoodsSeacrh extends Goods {
    public static function getGoodById($id) {
        return $this->findOne($id);
    }
    public static function getActive() {
        return $this->find()->getActive();
    }
}