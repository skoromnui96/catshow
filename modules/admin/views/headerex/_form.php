<?php

use kartik\datetime\DateTimePicker;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Headerex\Headerex */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="headerex-form">

    <?php $form = ActiveForm::begin(); ?>
    <label class="control-label" for="headerex-description">Логотип выставки</label>
<!--    --><?//= FileInput::widget([
//        'name' => 'ImageManager[attachment]',
//        'options'=>[
//            'multiple'=>true
//        ],
//        'pluginOptions' => [
//            'deleteUrl' => Url::toRoute(['/admin/headerex/delete-image']),
//            'initialPreview'=> $model->imagesLinks1,
//            'initialPreviewAsData'=>true,
//            'overwriteInitial'=>false,
//            'initialPreviewConfig'=>$model->imagesLinksData1,
//            'uploadUrl' => Url::to(['/admin/headerex/save-img']),
//            'uploadExtraData' => [
//                'ImageManager[class]' => 'logo',
//                'ImageManager[item_id]' => 1
//            ],
//            'maxFileCount' => 1
//        ],
//        'pluginEvents' => [
//            'filesorted' => new \yii\web\JsExpression('function(event, params){
//                  $.post("'.Url::toRoute(["/admin/headerex/sort-image","id"=>$model->id]).'",{sort: params});
//            }')
//        ],
//
//    ]);?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_begin')->widget(\yii\jui\DatePicker::className(), [
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>


    <label class="control-label" for="headerex-description">Логотипы</label>
    <?= FileInput::widget([
        'name' => 'ImageManager[attachment]',
        'options'=>[
            'multiple'=>true
        ],
        'pluginOptions' => [
            'deleteUrl' => Url::toRoute(['/admin/headerex/delete-image']),
            'initialPreview'=> $model->imagesLinks,
            'initialPreviewAsData'=>true,
            'overwriteInitial'=>false,
            'initialPreviewConfig'=>$model->imagesLinksData,
            'uploadUrl' => Url::to(['/admin/headerex/save-img']),
            'uploadExtraData' => [
                'ImageManager[class]' => $model->formName(),
                'ImageManager[item_id]' => 1
            ],
            'maxFileCount' => 8
        ],
        'pluginEvents' => [
            'filesorted' => new \yii\web\JsExpression('function(event, params){
                  $.post("'.Url::toRoute(["/admin/headerex/sort-image","id"=>$model->id]).'",{sort: params});
            }')
        ],

    ]);?>

    <div class="form-group" style="margin-top: 40px">
        <?= Html::submitButton('Cохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
