<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cats\Cats */

$this->title = 'Победители';
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="cats-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
