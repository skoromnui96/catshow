<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Таблицы стоимости участия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            //'td21',
            //'td22',
            //'td23',
            //'td24',
            //'td31',
            //'td32',
            //'td33',
            //'td34',
            //'td41',
            //'td42',
            //'td43',
            //'td44',
            //'td51',
            //'td52',
            //'td53',
            //'td54',
            //'td61',
            //'td71',
            //'td81',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
