<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts\Contacts */


$this->params['breadcrumbs'][] = ['label' => 'Контакты'];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="contacts-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
