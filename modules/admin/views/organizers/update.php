<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizers\Organizers */

$this->title = 'Обновить информацию';
$this->params['breadcrumbs'][] = ['label' => 'Организаторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="organizers-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
