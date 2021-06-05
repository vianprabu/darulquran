<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Logbook */

$this->title = 'Update Logbook: ' . ' ' . $model->logbook_id;
$this->params['breadcrumbs'][] = ['label' => 'Logbook', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->logbook_id, 'url' => ['view', 'id' => $model->logbook_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="logbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
