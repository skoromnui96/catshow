<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Headerex\Headerex */

$this->title = 'Главная';
$this->params['breadcrumbs'][] = ['label' => 'Главная', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменения в записи';
?>
<div class="headerex-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
