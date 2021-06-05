<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenispresensiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jenispresensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jenispresensi_id')->textInput(['maxlength' => true, 'placeholder' => 'Jenispresensi']) ?>

    <?= $form->field($model, 'nama_jenispresensi')->textInput(['maxlength' => true, 'placeholder' => 'Nama Jenispresensi']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
