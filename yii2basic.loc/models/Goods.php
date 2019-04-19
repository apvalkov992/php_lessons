<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\queries\GoodsQuery;

class Goods extends ActiveRecord 
{

    const STATUS_ACTIVE = 'active';
    const STATUS_DISABLE = 'disable';
    const STATUS_DRAFT = 'draft';
    const STATUS_COORDINATION = 'coordination';

    /**
    * @return string
    */
    public static function tableName() 
    {
        return '{{%goods}}';
    }

    /**
    * @return []
    */
    public function rules() 
    {
        return [
            [['title','price','status','category_id'],'required'],
        ];
    }

    /**
    * @return []
    */
    public function attributeLabels() 
    {
        return [
            'title' => 'Название',
            'price' => 'Цена',
            'status' => 'Cтатус',
            'category_id' => 'id категории',
            'description' => 'Описание',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
        ];
    }

    /**
    * @return []
    */
    public static function getStatuses()
    {
        return [
            'active' => 'активен',
            'disable' => 'отключен',
            'draft' => 'черновик',
            'coordination' => 'на согласовании',
        ];
    }

    /**
    * @return string|null
    */
    public function currentStatus() 
    {
        $statuses = getStatuses();

        return isset($statuses[$this->status]) ? $statuses[$this->status] : null;
    }


    /**
    * @return GoodsQuery
    */
    public static function find() {
        return new GoodsQuery(get_called_class());
    }

}