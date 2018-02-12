<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Slider\Slider */

$this->params['breadcrumbs'][] = ['label' => 'Партнеры'];
?>
<div class="slider-view">


    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <p><b>Парнеры</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/slider/<?=$one->name?>" alt="" width="20%" height="20%">
    <?php endforeach;?>

</div>
