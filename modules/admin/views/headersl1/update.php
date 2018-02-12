<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Headersl1\Headersl1 */

$this->title = 'Рекламная кампания';
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="headersl1-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
