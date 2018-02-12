<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Headersl1\Headersl1 */

$this->title = 'Рекламная кампания';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headersl1-view">


    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
        ],
    ]) ?>
    <p class="control-label" style="margin-top: 10px;"><b>Фото рекламы</b></p>
    <?php foreach ($model->images as $one):?>
        <img src="/img/headersl1/<?=$one->name?>" alt="" width="10%" height="10%">
    <?php endforeach;?>

</div>
