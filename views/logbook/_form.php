<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Logbook */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="logbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'logbook_id')->textInput(['placeholder' => 'Logbook']) ?>

    <?= $form->field($model, 'targetkinerja_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Targetkinerja::find()->orderBy('targetkinerja_id')->asArray()->all(), 'targetkinerja_id', 'targetkinerja_id'),
        'options' => ['placeholder' => 'Choose Targetkinerja'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'uraian_logbook')->textInput(['maxlength' => true, 'placeholder' => 'Uraian Logbook']) ?>

    <?= $form->field($model, 'waktu_awal')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Waktu Awal',
                'autoclose' => true,
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'waktu_akhir')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Waktu Akhir',
                'autoclose' => true,
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'volume_capaian')->textInput(['placeholder' => 'Volume Capaian']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
