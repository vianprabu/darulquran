<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Anakpegawai */

?>
<div class="anakpegawai-create">
    <p style="text-align: right"> Home > <a href="index.php?r=anakpegawai/index">Anak Pegawai</a></p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
