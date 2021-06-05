<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izindetail */

$this->title = 'Create Izindetail';
$this->params['breadcrumbs'][] = ['label' => 'Izindetail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izindetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
