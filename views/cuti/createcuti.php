<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cuti */

?>
<div class="cuti-create">
    <p style="text-align: right"> Home > <a href="index.php?r=cuti/index">Cuti</a></p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formcuti', [
        'model' => $model,
    ]) ?>

</div>
