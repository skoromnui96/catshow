<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\About\About */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'О выставке', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-view">


    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'description',
        ],
    ]) ?>
    <p class="control-label" style="margin-top: 10px;"><b>Фото для слайдера</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/about/<?=$one->name?>" alt="" width="20%" height="20%">
    <?php endforeach;?>

</div>
