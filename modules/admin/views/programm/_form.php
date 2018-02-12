<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programm\Programm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'month')->dropDownList([
        'Января' => 'Января',
        'Февраля' => 'Февраля',
        'Марта' => 'Марта',
        'Апреля' => 'Апреля',
        'Мая' => 'Мая',
        'Июня' => 'Июня',
        'Июля' => 'Июля',
        'Августф' => 'Августа',
        'Сентября' => 'Сентября',
        'Октября' => 'Октября',
        'Ноября' => 'Ноября',
        'Декабря' => 'Декабря',
    ]) ?>

    <?= $form->field($model, 'from')->textInput() ?>

    <?= $form->field($model, 'to')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
