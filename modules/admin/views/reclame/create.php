<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Reclame\Reclame */

$this->title = 'Create Reclame';
$this->params['breadcrumbs'][] = ['label' => 'Reclames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reclame-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
