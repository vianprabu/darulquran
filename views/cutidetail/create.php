<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cutidetail */

$this->title = 'Create Cutidetail';
$this->params['breadcrumbs'][] = ['label' => 'Cutidetail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutidetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
