<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cutidetail */

$this->title = 'Update Cutidetail: ' . ' ' . $model->cutidetail_id;
$this->params['breadcrumbs'][] = ['label' => 'Cutidetail', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cutidetail_id, 'url' => ['view', 'id' => $model->cutidetail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cutidetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
