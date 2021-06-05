<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Filepegawai */

$this->title = 'Update Filepegawai: ' . ' ' . $model->file_id;
$this->params['breadcrumbs'][] = ['label' => 'Filepegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->file_id, 'url' => ['view', 'id' => $model->file_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filepegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
