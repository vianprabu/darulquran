<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisizin */

$this->title = 'Update Jenisizin: ' . ' ' . $model->jenisizin_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenisizin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenisizin_id, 'url' => ['view', 'id' => $model->jenisizin_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenisizin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
