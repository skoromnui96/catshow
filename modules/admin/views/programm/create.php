<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Programm\Programm */

$this->title = 'Создать пункт программы';
$this->params['breadcrumbs'][] = ['label' => 'Программа', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programm-create">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
