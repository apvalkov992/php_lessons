<?php
namespace app\queries;

use yii\db\ActiveQuery;
use app\models\Goods;
class GoodsQuery extends ActiveQuery {
    /**
    * @return []
    */
    public function getActive()
    {
        return $this->andWhere(['status'=>Goods::getStatuses()[Goods::STATUS_ACTIVE]]);
    }
}