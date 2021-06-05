<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PangkatgolonganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pangkatgolongan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pangkatgolongan_id')->textInput(['placeholder' => 'Pangkatgolongan']) ?>

    <?= $form->field($model, 'nama_pangkatgolongan')->textInput(['maxlength' => true, 'placeholder' => 'Nama Pangkatgolongan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
