<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Filepegawai */

$this->title = 'Create Filepegawai';
$this->params['breadcrumbs'][] = ['label' => 'Filepegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filepegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
