<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnakpegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-anakpegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'anak_id')->textInput(['maxlength' => true, 'placeholder' => 'Anak']) ?>

    <?= $form->field($model, 'pegawai_id')->textInput(['maxlength' => true, 'placeholder' => 'Pegawai']) ?>

    <?= $form->field($model, 'nama_anak')->textInput(['maxlength' => true, 'placeholder' => 'Nama Anak']) ?>

    <?= $form->field($model, 'tempatlahir_anak')->textInput(['maxlength' => true, 'placeholder' => 'Tempatlahir Anak']) ?>

    <?= $form->field($model, 'tgllahir_anak')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgllahir Anak',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
