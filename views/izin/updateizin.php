<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izin */

$this->title = 'Update Izin: ';
$this->params['breadcrumbs'][] = ['label' => 'Izin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->izin_id, 'url' => ['view', 'id' => $model->izin_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formizin', [
        'model' => $model,
    ]) ?>

</div>
