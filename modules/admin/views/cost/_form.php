<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->dropDownList(['FIFE' => 'FIFE', 'WCF' => 'WCF','CFA' => 'CFA']) ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th><?= $form->field($model, 'th11')->textInput(['maxlength' => true])->label(false) ?></th>
            <th><?= $form->field($model, 'th12')->textInput(['maxlength' => true])->label(false)  ?></th>
            <th><?= $form->field($model, 'th13')->textInput(['maxlength' => true])->label(false)  ?></th>
            <th><?= $form->field($model, 'th14')->textInput(['maxlength' => true])->label(false)  ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $form->field($model, 'td21')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td22')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td23')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td24')->textInput(['maxlength' => true])->label(false) ?></td>
        </tr>
        <tr>
            <td><?= $form->field($model, 'td31')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td32')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td33')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td34')->textInput(['maxlength' => true])->label(false) ?></td>
        </tr>

        <tr>
            <td><?= $form->field($model, 'td41')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td42')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td43')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td44')->textInput(['maxlength' => true])->label(false) ?></td>
        </tr>

        <tr>
            <td><?= $form->field($model, 'td51')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td52')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td53')->textInput(['maxlength' => true])->label(false) ?></td>
            <td><?= $form->field($model, 'td54')->textInput(['maxlength' => true])->label(false) ?></td>
        </tr>
        <tr>
            <td colspan="4"><?= $form->field($model, 'td61')->textInput(['maxlength' => true])->label(false) ?></td>
        </tr>
        <tr>
            <td colspan="4"><?= $form->field($model, 'td71')->textInput(['maxlength' => true])->label(false) ?></td>
        </tr>
        <tr>
            <td colspan="4"><?= $form->field($model, 'td81')->textInput(['maxlength' => true])->label(false) ?></td>
        </tr>
        </tbody>
    </table>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
