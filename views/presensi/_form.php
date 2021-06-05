<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Presensi */
/* @var $form yii\widgets\ActiveForm */
$id = Yii::$app->user->identity->username;
$jadwalpresensi = \app\models\JadwalpresensiPegawai::find()->where(['pegawai_id' => $id])->one();
$jadwalpresensi_id = $jadwalpresensi['jadwalpresensipegawai_id'];
?>

<div class="presensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>
    
    <?= $form->field($model, 'presensi_id')->textInput(['maxlength' => true, 'placeholder' => 'Presensi']) ?>

    <?= $form->field($model, 'jadwalpresensipegawai_id')->textInput(['value' => $jadwalpresensi_id, 'readonly' => true]) ?>

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

    <?= $form->field($model, 'status_kehadiran')->dropDownList(['HADIR' => 'HADIR', 'IJIN' => 'IJIN', 'CUTI' => 'CUTI', 'SAKIT' => 'SAKIT',], ['prompt' => '']) ?>

    <?= $form->field($model, 'cuti_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Cuti::find()->orderBy('cuti_id')->asArray()->all(), 'cuti_id', 'cuti_id'),
        'options' => ['placeholder' => 'Choose Cuti'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'izin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Izin::find()->orderBy('izin_id')->asArray()->all(), 'izin_id', 'izin_id'),
        'options' => ['placeholder' => 'Choose Izin'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jam_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'jam_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Pulang',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'logpresensi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Logpresensi::find()->orderBy('logpresensi_id')->asArray()->all(), 'logpresensi_id', 'logpresensi_id'),
        'options' => ['placeholder' => 'Choose Logpresensi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true, 'placeholder' => 'Latitude']) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true, 'placeholder' => 'Longitude']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>