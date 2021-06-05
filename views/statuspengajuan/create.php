<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Statuspengajuan */

$this->title = 'Create Statuspengajuan';
$this->params['breadcrumbs'][] = ['label' => 'Statuspengajuan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statuspengajuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
