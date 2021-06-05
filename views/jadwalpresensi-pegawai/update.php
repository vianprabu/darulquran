<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalpresensiPegawai */

$this->title = 'Update Jadwalpresensi Pegawai: ' . ' ' . $model->jadwalpresensipegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensi Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jadwalpresensipegawai_id, 'url' => ['view', 'id' => $model->jadwalpresensipegawai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwalpresensi-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
