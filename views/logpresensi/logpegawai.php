<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Logpresensi */
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
$pegawai_id = $pegawai['pegawai_id'];
$waktu = date("h:i:sa");
?>


<div class="logpresensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'logpresensi_id')->textInput(['maxlength' => true, 'placeholder' => 'Log presensi ID']) ?>

    <?= $form->field($model, 'pegawai_id')->textInput(['value' => $pegawai_id, 'readonly' => true]) ?>
    
    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true, 'placeholder' => 'Latitude']) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true, 'placeholder' => 'Longitude']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>