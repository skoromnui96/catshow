<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Headerex\Headerex */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Главная', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headerex-view">
    

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <p class="control-label" style="margin-top: 10px;"><b>Логотип выставки</b></p>
    <?php foreach ($model->images1 as $one1):?>
        <img src="/img/logo/<?=$one1->name?>" alt="" width="10%" height="10%">
    <?php endforeach;?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'date',
            'title',
            'description',
            'date_begin',
        ],
    ]) ?>
    <p class="control-label" style="margin-top: 10px;"><b>Лого спонсоров</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/headerex/<?=$one->name?>" alt="" width="10%" height="10%">
    <?php endforeach;?>
    <?=Yii::$app->formatter->format($model->date_begin, 'date');?>
    
</div>
