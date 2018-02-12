<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Scheme\Scheme */

$this->title = 'План-схема зала';
$this->params['breadcrumbs'][] = ['label' => 'Схема'];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="scheme-update">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
