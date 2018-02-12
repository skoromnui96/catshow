<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход в админ панель';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-comment mr0"><!--leave comment-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="site-login">
                <h1><?= Html::encode($this->title) ?></h1>
            
                <p>Пожалуйста введите данные в поля для входа:</p>
            
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-2 control-label'],
                    ],
                ]); ?>
            
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
            
                    <?= $form->field($model, 'password')->passwordInput() ?>

            
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Ввойти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>
            
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>

