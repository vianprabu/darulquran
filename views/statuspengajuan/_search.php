<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatuspengajuanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-statuspengajuan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'statuspengajuan_id')->textInput(['maxlength' => true, 'placeholder' => 'Statuspengajuan']) ?>

    <?= $form->field($model, 'ket_statuspengajuan')->textInput(['maxlength' => true, 'placeholder' => 'Ket Statuspengajuan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
