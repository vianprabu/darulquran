<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="pegawai-form">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-6">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->errorSummary($model); ?>

            <?= $form->field($model, 'pegawai_id')->textInput(['maxlength' => true, 'placeholder' => 'Pegawai']) ?>

            <?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'placeholder' => 'Nik']) ?>

            <?= $form->field($model, 'nip')->textInput(['maxlength' => true, 'placeholder' => 'Nip']) ?>

            <?= $form->field($model, 'nama_pegawai')->textInput(['maxlength' => true, 'placeholder' => 'Nama Pegawai']) ?>

            <?= $form->field($model, 'jeniskelamin_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskelamin::find()->orderBy('jeniskelamin_id')->asArray()->all(), 'jeniskelamin_id', 'namajeniskelamin'),
                'options' => ['placeholder' => 'Choose Jenis Kelamin'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-6">
            <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true, 'placeholder' => 'Tempat Lahir']) ?>
        </div>

        <div class="col-md-5 col-xs-6">
            <?= $form->field($model, 'tgl_lahir')->widget(\kartik\datecontrol\DateControl::classname(), [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Lahir',
                        'autoclose' => true
                    ]
                ],
            ]); ?>
        </div>

        <div class="col-md-10 col-md-offset-1 col-xs-6">
            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Alamat']) ?>
        </div>

        <div class="col-md-2 col-md-offset-1 col-xs-6">

            <?= $form->field($model, 'pendidikanpegawai_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikanpegawai::find()->orderBy('pendidikanpegawai_id')->asArray()->all(), 'pendidikanpegawai_id', 'jenjang'),
                'options' => ['placeholder' => 'Choose Pendidikanpegawai'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>

        </div>
        <div class="col-md-4 col-xs-6">
            <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true, 'placeholder' => 'Jurusan']) ?>
        </div>
        <div class="col-md-4 col-xs-6">
            <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Nama Sekolah']) ?>
        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-6">
            <?= $form->field($model, 'status_kawin')->textInput(['maxlength' => true, 'placeholder' => 'Status Kawin']) ?>

            <?= $form->field($model, 'sekolah_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->orderBy('sekolah_id')->asArray()->all(), 'sekolah_id', 'nama_sekolah'),
                'options' => ['placeholder' => 'Choose Sekolah'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>

            <?= $form->field($model, 'statuspegawai_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Statuspegawai::find()->orderBy('statuspegawai_id')->asArray()->all(), 'statuspegawai_id', 'statuspegawai'),
                'options' => ['placeholder' => 'Choose Statuspegawai'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>

            <?= $form->field($model, 'jenispegawai_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenispegawai::find()->orderBy('jenispegawai_id')->asArray()->all(), 'jenispegawai_id', 'nama_jenispegawai'),
                'options' => ['placeholder' => 'Choose Jenispegawai'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>

        <div class="col-md-5 col-xs-6">
            <?= $form->field($model, 'nama_pasangan')->textInput(['maxlength' => true, 'placeholder' => 'Nama Pasangan']) ?>

            <?= $form->field($model, 'tmt')->widget(\kartik\datecontrol\DateControl::classname(), [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tmt',
                        'autoclose' => true
                    ]
                ],
            ]); ?>

            <?= $form->field($model, 'pangkatgolongan_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pangkatgolongan::find()->orderBy('pangkatgolongan_id')->asArray()->all(), 'pangkatgolongan_id', 'nama_pangkatgolongan'),
                'options' => ['placeholder' => 'Choose Pangkatgolongan'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>

            <?= $form->field($model, 'tugas_tambahan')->textInput(['maxlength' => true, 'placeholder' => 'Tugas Tambahan']) ?>
        </div>


        <div class="col-md-10 col-md-offset-1 col-xs-6">
            <?php $list = [0 => 'BELUM', 1 => 'SUDAH']; ?>
            <?= $form->field($model, 'sertifikasi')->radioList($list); ?>

            <?= $form->field($model, 'status_inpasing')->radioList($list); ?>

            <?= $form->field($model, 'kaderisasi_nu')->radioList($list); ?>

            <?php
            $pic = \Yii::getAlias('fotopegawai/') . $model['foto_pegawai'];
            ?>

            <?php if (file_exists($pic)) : ?>
                <!-- jika ada usernamenya maka tampilkan foto berdasarkan pegawai_id -->
                <img src="fotopegawai/<?= $model['foto_pegawai']; ?>" alt="" class="img-thumbnail" width="200px;" height="auto" onerror="this.onerror=null; this.src='fotopegawai/default.jpg';">
            <?php else : ?>
                <!-- jika tidak ada fotonya maka tampilkan foto default -->
                <img src="fotopegawai/default.jpg" alt="https://icon-library.net/icon/default-profile-icon-17.html" width="200px;" height="auto" onerror="this.onerror=null; this.src='fotopegawai/default.jpg';">
            <?php endif; ?>

            <?= $form->field($model, 'foto_pegawai')->fileInput() ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>