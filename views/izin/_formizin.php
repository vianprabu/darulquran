<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izin */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Presensi',
        'relID' => 'presensi',
        'value' => \yii\helpers\Json::encode($model->presensis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<?php
$id = Yii::$app->user->identity->username;
$pegawai  = \app\models\Pegawai::find()->where(['pegawai_id' => $id])->one();
$nama = $pegawai['nama_pegawai'];
?>

<div class="izin-form">
    <p style="margin-bottom: 20px; font-size: 16px;"><b>Nama</b> : <?= $nama ?> </p>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'pegawai_id')->textInput(['value' => $id, 'readonly' => true]) ?>

    <?= $form->field($model, 'jenisizin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisizin::find()->orderBy('jenisizin_id')->asArray()->all(), 'jenisizin_id', 'nama_jenisizin'),
        'options' => ['placeholder' => 'Choose Jenis Izin'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'keterangan_izin')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan Izin']) ?>

    <?= $form->field($model, 'tgl_pengajuanizin')->textInput(['value' =>date('Y-m-d'), 'readonly' => true]) ?>


    <?= $form->field($model, 'tgl_awal')->widget(\kartik\datecontrol\DateControl::classname(), [
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

    <?= $form->field($model, 'tgl_tidak_izin')->widget(\kartik\datecontrol\DateControl::classname(), [
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

    <?= $form->field($model, 'tgl_akhir')->widget(\kartik\datecontrol\DateControl::classname(), [
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

    <?= $form->field($model, 'tgl_setujuiizin')->widget(\kartik\datecontrol\DateControl::classname(), [
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

    

    <?= $form->field($model, 'statuspengajuan_id')->textInput(['value' =>0, 'readonly' => true]) ?>

    <?= $form->field($model, 'bukti')->textInput(['maxlength' => true, 'placeholder' => 'Bukti Izin']) ?>
    <small>file yang dapat diupload bertype .jpg .png .pdf .docx .xlsx .pptx</small><br><br>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
