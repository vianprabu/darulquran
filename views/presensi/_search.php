<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PresensiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-presensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'presensi_id')->textInput(['maxlength' => true, 'placeholder' => 'Presensi']) ?>

    <?= $form->field($model, 'jadwalpresensipegawai_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\JadwalpresensiPegawai::find()->orderBy('jadwalpresensipegawai_id')->asArray()->all(), 'jadwalpresensipegawai_id', 'jadwalpresensipegawai_id'),
        'options' => ['placeholder' => 'Choose Jadwalpresensi pegawai'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tgl')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'status_kehadiran')->dropDownList([ 'HADIR' => 'HADIR', 'IJIN' => 'IJIN', 'CUTI' => 'CUTI', 'SAKIT' => 'SAKIT', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cuti_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Cuti::find()->orderBy('cuti_id')->asArray()->all(), 'cuti_id', 'cuti_id'),
        'options' => ['placeholder' => 'Choose Cuti'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php /* echo $form->field($model, 'izin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Izin::find()->orderBy('izin_id')->asArray()->all(), 'izin_id', 'izin_id'),
        'options' => ['placeholder' => 'Choose Izin'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jam_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Masuk',
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'jam_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Pulang',
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'logpresensi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Logpresensi::find()->orderBy('logpresensi_id')->asArray()->all(), 'logpresensi_id', 'logpresensi_id'),
        'options' => ['placeholder' => 'Choose Logpresensi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'latitude')->textInput(['maxlength' => true, 'placeholder' => 'Latitude']) */ ?>

    <?php /* echo $form->field($model, 'longitude')->textInput(['maxlength' => true, 'placeholder' => 'Longitude']) */ ?>

    <?php /* echo $form->field($model, 'keterangan')->textarea(['rows' => 6]) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
