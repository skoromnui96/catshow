<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Headersl\Headersl */

$this->title = 'Фон на главной';
$this->params['breadcrumbs'][] = ['label' => 'Фон'];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="headersl-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
