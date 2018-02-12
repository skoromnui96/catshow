<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Organizers\Organizers */

$this->title = 'Добавить организатора';
$this->params['breadcrumbs'][] = ['label' => 'Организаторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizers-create">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
