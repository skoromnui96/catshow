<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slider\Slider */

$this->params['breadcrumbs'][] = ['label' => 'Партеры'];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="slider-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
