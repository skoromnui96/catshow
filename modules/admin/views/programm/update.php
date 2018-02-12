<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programm\Programm */

$this->title = 'Обновить программу';
$this->params['breadcrumbs'][] = ['label' => 'Программа', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="programm-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
