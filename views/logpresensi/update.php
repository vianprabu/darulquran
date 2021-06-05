<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Logpresensi */

$this->title = 'Update Logpresensi: ' . ' ' . $model->logpresensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Logpresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->logpresensi_id, 'url' => ['view', 'id' => $model->logpresensi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="logpresensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
