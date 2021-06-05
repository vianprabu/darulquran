<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniskelamin */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="jeniskelamin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'jeniskelamin_id')->textInput(['maxlength' => true, 'placeholder' => 'Jeniskelamin']) ?>

    <?= $form->field($model, 'namajeniskelamin')->textInput(['maxlength' => true, 'placeholder' => 'Namajeniskelamin']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
