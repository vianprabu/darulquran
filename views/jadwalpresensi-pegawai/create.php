<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JadwalpresensiPegawai */

$this->title = 'Create Jadwalpresensi Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensi Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalpresensi-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
