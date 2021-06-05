<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalpresensiPegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jadwalpresensi-pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jadwalpresensipegawai_id')->textInput(['placeholder' => 'Jadwalpresensipegawai']) ?>

    <?= $form->field($model, 'pegawai_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pegawai::find()->orderBy('pegawai_id')->asArray()->all(), 'pegawai_id', 'pegawai_id'),
        'options' => ['placeholder' => 'Choose Pegawai'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jadwalpresensi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalpresensi::find()->orderBy('jadwalpresensi_id')->asArray()->all(), 'jadwalpresensi_id', 'jadwalpresensi_id'),
        'options' => ['placeholder' => 'Choose Jadwalpresensi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
