<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenisizin */

$this->title = 'Create Jenisizin';
$this->params['breadcrumbs'][] = ['label' => 'Jenisizin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisizin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
