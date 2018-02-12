<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Judges\JudgesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Призовой фонд';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="judges-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           'description',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}{update}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
