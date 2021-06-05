<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izin */

?>
<div class="izin-create">
    <p style="text-align: right"> Home > <a href="index.php?r=izin/index">Izin</a></p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formizin', [
        'model' => $model,
    ]) ?>

</div>
