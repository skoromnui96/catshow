<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Judges\Judges */

$this->title = 'Добавление судьи';
$this->params['breadcrumbs'][] = ['label' => 'Судьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="judges-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
