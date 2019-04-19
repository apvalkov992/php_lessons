<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="col-md-8 col-md-offset-2">
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($goods,'title')->textInput(['autofocus' => true, 'value'=>$Good->title])?>
    <?= $form->field($goods,'price')->textInput(['value'=>$Good->price])?>
    <?= $form->field($goods,'status')->textInput(['value'=>$Good->status])?>
    <?= $form->field($goods,'category_id')->textInput(['value'=>$Good->category_id])?>
    <?= $form->field($goods,'description')->textarea(['rows' => '6','value'=>$Good->description])?>
    <?= $form->field($goods,'created_at')->hiddenInput(['value'=>$Good->created_at])->label(false)?>
    <?= $form->field($goods,'updated_at')->hiddenInput(['value'=>$Good->updated_at])->label(false)?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
</div>