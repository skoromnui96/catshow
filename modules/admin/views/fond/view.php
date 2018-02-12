<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fond\Fond */

$this->title = 'Призовой фонд';
$this->params['breadcrumbs'][] = ['label' => 'Призовой фонд', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fond-view">


    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'description',
        ],
    ]) ?>

    <p class="control-label" style="margin-top: 10px;"><b>Слайдер</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/fond/<?=$one->name?>" alt="" width="10%" height="10%">
    <?php endforeach;?>

</div>
