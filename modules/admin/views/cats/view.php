<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cats\Cats */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Победители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cats-view">
    

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'description',
        ],
    ]) ?>
    <p class="control-label" style="margin-top: 10px;"><b>Фото</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/cats/<?=$one->name?>" alt="" width="20%" height="20%">
    <?php endforeach;?>

</div>
