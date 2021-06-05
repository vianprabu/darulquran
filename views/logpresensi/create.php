<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Logpresensi */

$this->title = 'Create Logpresensi';
$this->params['breadcrumbs'][] = ['label' => 'Logpresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logpresensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
