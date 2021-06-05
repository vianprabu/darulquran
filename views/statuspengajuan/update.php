<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Statuspengajuan */

$this->title = 'Update Statuspengajuan: ' . ' ' . $model->statuspengajuan_id;
$this->params['breadcrumbs'][] = ['label' => 'Statuspengajuan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->statuspengajuan_id, 'url' => ['view', 'id' => $model->statuspengajuan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statuspengajuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
