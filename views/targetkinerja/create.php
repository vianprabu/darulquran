<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Targetkinerja */

$this->title = 'Create Targetkinerja';
$this->params['breadcrumbs'][] = ['label' => 'Targetkinerja', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="targetkinerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
