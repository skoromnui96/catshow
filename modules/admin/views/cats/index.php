<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Cats\CatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Победители';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cats-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'description',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}{view}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
