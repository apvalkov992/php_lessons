<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;

use app\forms\GoodsForm;

/*use app\models\Goods;
use app\queries\GoodsQuery;*/
use app\models\GoodsSeacrh;


class GoodsController extends Controller 
{
    public function actionIndex() 
    {
        $query = GoodsSeacrh::getActive();
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count(),
        ]);

        $goods = $query->orderBy('id')
           ->offset($pagination->offset)
           ->limit($pagination->limit)->all();

        return $this->render('index',[
            'goods' => $goods,
            'pagination' => $pagination,
        ]);

/*        if ($GoodsForm->load(Yii::$app->request->post()) && $GoodsForm->validate()) {
            // Сохраняем
            Yii::$app->session->setFlash('success', 'OK');

            return $this->render('index',['model'=>$GoodsForm])
        } else {
            Yii::$app->session->setFlash('danger', 'Error');
        }*/
    }

    public function actionAdd() 
    {
        $GoodsForm = new GoodsForm();
        if ($GoodsForm->load(Yii::$app->request->post()) && $GoodsForm->validate()) {
            if($GoodsForm->add()) {
                Yii::$app->session->setFlash('success','Успешно сохранено');
            } else {
                Yii::$app->session->setFlash('error','Ошибка сохранения');
            }
            return $this->render('add',['goods'=>$GoodsForm]);
        }
        else {
            return $this->render('add',['goods'=>$GoodsForm]);
        }
    }

    public function actionUpdate($id)
    {
        $Good = GoodsSeacrh::getGoodById($id);
        $GoodsForm = new GoodsForm();
        if ($GoodsForm->load(Yii::$app->request->post()) && $GoodsForm->validate()) {
            if($GoodsForm->update()) {
                Yii::$app->session->setFlash('success','Успешно сохранено');
            } else {
                Yii::$app->session->setFlash('error','Ошибка сохранения');
            }
            return $this->render('add',['goods'=>$GoodsForm,'Good'=>$Good]);
        }
        else {
            return $this->render('add',['goods'=>$GoodsForm,'Good'=>$Good]);
        }
    }

    public function actionRemove($id)
    {
        if (GoodsSeacrh::getGoodById($id) === NULL) {
            Yii::$app->session->setFlash('error','Запись не найдена');
            return $this->goBack();
        }
        $Good = GoodsSeacrh::getGoodById($id);
        if ($Good->delete()) {
            Yii::$app->session->setFlash('success','Успешно удалена запись');
            return $this->goBack();
        } else {
            Yii::$app->session->setFlash('error','Ошибка удаления записи');
            return $this->goBack();
        }

    }

    public function actionGood($id)
    {
        $Good = GoodsSeacrh::getGoodById($id);
        return $this->render('good',['good'=>$Good]);
    }
}