<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Logbook */

$this->title = $model->logbook_id;
$this->params['breadcrumbs'][] = ['label' => 'Logbook', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logbook-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Logbook'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->logbook_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->logbook_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        'logbook_id',
        [
            'attribute' => 'targetkinerja.targetkinerja_id',
            'label' => 'Targetkinerja',
        ],
        'uraian_logbook',
        'waktu_awal',
        'waktu_akhir',
        'volume_capaian',
        'keterangan',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Targetkinerja<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnTargetkinerja = [
        'uraian_target',
        'tahun',
        'volume',
        'satuan',
        'keterangan',
    ];
    echo DetailView::widget([
        'model' => $model->targetkinerja,
        'attributes' => $gridColumnTargetkinerja    ]);
    ?>
</div>
