<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendidikanpegawai */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Pegawai', 
        'relID' => 'pegawai', 
        'value' => \yii\helpers\Json::encode($model->pegawais),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="pendidikanpegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'pendidikanpegawai_id')->textInput(['placeholder' => 'Pendidikanpegawai']) ?>

    <?= $form->field($model, 'pegawai_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pegawai::find()->orderBy('pegawai_id')->asArray()->all(), 'pegawai_id', 'nama_pegawai'),
        'options' => ['placeholder' => 'Choose Pegawai'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'ket_pendidikan')->textInput(['maxlength' => true, 'placeholder' => 'Ket Pendidikan']) ?>

    <?= $form->field($model, 'jenjang')->dropDownList([ 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'D3' => 'D3', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_aktif')->checkbox() ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Pegawai'),
            'content' => $this->render('_formPegawai', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->pegawais),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
