<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Anakpegawai */

$this->title = 'Update Anakpegawai: ' . ' ' . $model->anak_id;
$this->params['breadcrumbs'][] = ['label' => 'Anakpegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->anak_id, 'url' => ['view', 'id' => $model->anak_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anakpegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
