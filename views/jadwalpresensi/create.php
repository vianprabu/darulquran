<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jadwalpresensi */

$this->title = 'Create Jadwalpresensi';
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalpresensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
