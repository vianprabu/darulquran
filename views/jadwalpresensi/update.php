<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalpresensi */

$this->title = 'Update Jadwalpresensi: ' . ' ' . $model->jadwalpresensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jadwalpresensi_id, 'url' => ['view', 'id' => $model->jadwalpresensi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwalpresensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
