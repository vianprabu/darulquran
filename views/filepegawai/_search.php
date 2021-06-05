<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilepegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-filepegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'file_id')->textInput(['placeholder' => 'File']) ?>

    <?= $form->field($model, 'namafile')->textInput(['maxlength' => true, 'placeholder' => 'Namafile']) ?>

    <?= $form->field($model, 'ukuran')->textInput(['placeholder' => 'Ukuran']) ?>

    <?= $form->field($model, 'tgl_upload')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Upload',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'tgl_proses')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Proses',
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
