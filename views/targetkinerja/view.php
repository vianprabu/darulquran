<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Targetkinerja */

$this->title = $model->targetkinerja_id;
$this->params['breadcrumbs'][] = ['label' => 'Targetkinerja', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="targetkinerja-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Targetkinerja'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->targetkinerja_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->targetkinerja_id], [
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
        'targetkinerja_id',
        'uraian_target',
        'tahun',
        'volume',
        'satuan',
        'keterangan',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerLogbook->totalCount){
    $gridColumnLogbook = [
        ['class' => 'yii\grid\SerialColumn'],
            'logbook_id',
                        'uraian_logbook',
            'waktu_awal',
            'waktu_akhir',
            'volume_capaian',
            'keterangan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerLogbook,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-logbook']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Logbook'),
        ],
        'export' => false,
        'columns' => $gridColumnLogbook
    ]);
}
?>

    </div>
</div>
