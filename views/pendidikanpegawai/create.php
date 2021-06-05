<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pendidikanpegawai */

?>
<div class="pendidikanpegawai-create">
    <p style="text-align: right"> Home > <a href="index.php?r=pendidikanpegawai/index">Pendidikan Pegawai</a></p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
