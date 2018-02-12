<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Judges\Judges */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Судьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="judges-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'profession',
            'category'
        ],
    ]) ?>
    <p class="control-label" style="margin-top: 10px;"><b>Фото</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/judges/<?=$one->name?>" alt="" width="20%" height="20%">
    <?php endforeach;?>

</div>
