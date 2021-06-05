<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TargetkinerjaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-targetkinerja-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'targetkinerja_id')->textInput(['placeholder' => 'Targetkinerja']) ?>

    <?= $form->field($model, 'uraian_target')->textInput(['maxlength' => true, 'placeholder' => 'Uraian Target']) ?>

    <?= $form->field($model, 'tahun')->textInput(['placeholder' => 'Tahun']) ?>

    <?= $form->field($model, 'volume')->textInput(['placeholder' => 'Volume']) ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true, 'placeholder' => 'Satuan']) ?>

    <?php /* echo $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
