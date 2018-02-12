<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Scheme\Scheme */

$this->title = 'План-схема зала';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scheme-view">



    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'text',
        ],
    ]) ?>
    <p class="control-label" style="margin-top: 10px;"><b>Изображение схемы зала</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/scheme/<?=$one->name?>" alt="" width="50%" height="50%">
    <?php endforeach;?>

</div>
