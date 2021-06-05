<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniscuti */

$this->title = 'Update Jeniscuti: ' . ' ' . $model->jeniscuti_id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniscuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jeniscuti_id, 'url' => ['view', 'id' => $model->jeniscuti_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jeniscuti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
