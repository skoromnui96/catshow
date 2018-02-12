<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Judges\Judges */

$this->title = 'Изменить';
$this->params['breadcrumbs'][] = ['label' => 'Судьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="judges-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
