<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalpresensiPegawai */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Presensi', 
        'relID' => 'presensi', 
        'value' => \yii\helpers\Json::encode($model->presensis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="jadwalpresensi-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

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

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Presensi'),
            'content' => $this->render('_formPresensi', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->presensis),
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
