<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Presensi */

$this->title = 'Update Presensi: ' . ' ' . $model->presensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Presensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->presensi_id, 'url' => ['view', 'id' => $model->presensi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="presensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
