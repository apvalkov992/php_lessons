<?php

namespace app\forms;

use yii\base\Model;
use app\models\Goods;
class GoodsForm extends Model 
{
    public $id;
    public $title;
    public $price;
    public $status;
    public $category_id;
    public $description;
    public $created_at;
    public $updated_at;

    /**
    * @return []
    */
    public function rules() 
    {
        return [
            [['id'],'integer'],
            [['title','price','status','category_id'],'required'],
            [['title','status'],'string','max'=>255],
            [['price'],'double'],
            [['category_id'],'integer'],
            [['description'],'string','max'=>5000],
            [['created_at','updated_at'],'date'],
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

    public function add() 
    {
        if ($this->validate()) {
            $good = new Goods();
            $good->title = $this->title;
            $good->price = $this->price;
            $good->status = $this->status;
            $good->category_id = $this->category_id;
            $good->description = $this->description;
            $good->created_at = date_format(date_create(),'Y-m-d h:i:s');
            $good->updated_at = date_format(date_create(),'Y-m-d h:i:s');
            if ($good->save()) {
                return $good;
            }
        }
        return null;
    }

    public function update()
    {
        if ($this->validate()) {
            $good = Goods::findOne($this->id);
            $good->title = $this->title;
            $good->price = $this->price;
            $good->status = $this->status;
            $good->category_id = $this->category_id;
            $good->description = $this->description;
            $good->updated_at = date_format(date_create(),'Y-m-d h:i:s');
            if ($good->save()) {
                return $good;
            }
        }
        return null;
    }
}