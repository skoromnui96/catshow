<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Headersl\Headersl */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Фон', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headersl-view">
    

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php foreach ($model->images as $one):?>
        <img src="/img/headersl/<?=$one->name?>" alt="" width="50%" height="50%">
    <?php endforeach;?>

</div>
