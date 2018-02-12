<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cost */

$this->title = 'Обновить таблицу';
$this->params['breadcrumbs'][] = ['label' => 'Стоимость участия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name];
?>
<div class="cost-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
