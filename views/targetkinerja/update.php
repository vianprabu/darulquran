<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Targetkinerja */

$this->title = 'Update Targetkinerja: ' . ' ' . $model->targetkinerja_id;
$this->params['breadcrumbs'][] = ['label' => 'Targetkinerja', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->targetkinerja_id, 'url' => ['view', 'id' => $model->targetkinerja_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="targetkinerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
