<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenispresensi */

$this->title = 'Update Jenispresensi: ' . ' ' . $model->jenispresensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenispresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenispresensi_id, 'url' => ['view', 'id' => $model->jenispresensi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenispresensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
