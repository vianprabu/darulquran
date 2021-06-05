<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pangkatgolongan */

$this->title = 'Update Pangkatgolongan: ' . ' ' . $model->pangkatgolongan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pangkatgolongan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pangkatgolongan_id, 'url' => ['view', 'id' => $model->pangkatgolongan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pangkatgolongan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
