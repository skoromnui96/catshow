<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\About\About */

$this->title = 'О выставке';
$this->params['breadcrumbs'][] = ['label' => 'О выставке'];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="about-update">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
