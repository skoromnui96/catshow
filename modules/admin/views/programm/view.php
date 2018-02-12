<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Programm\Programm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Программа', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programm-view">

    
    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны что хотите удалить пункт программы?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'day',
            'month',
            'from',
            'to',
            'description',
        ],
    ]) ?>

</div>
