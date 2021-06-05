<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenispresensi */

$this->title = 'Create Jenispresensi';
$this->params['breadcrumbs'][] = ['label' => 'Jenispresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenispresensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
