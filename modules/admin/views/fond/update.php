<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fond\Fond */

$this->title = 'Призовой фонд';
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="fond-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
