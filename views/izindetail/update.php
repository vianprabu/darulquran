<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izindetail */

$this->title = 'Update Izindetail: ' . ' ' . $model->izindetail_id;
$this->params['breadcrumbs'][] = ['label' => 'Izindetail', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->izindetail_id, 'url' => ['view', 'id' => $model->izindetail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izindetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
