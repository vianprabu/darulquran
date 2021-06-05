<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Logpresensi */

$this->title = $model->logpresensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Logpresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logpresensi-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Logpresensi'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->logpresensi_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->logpresensi_id], [
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
        'logpresensi_id',
        'pegawai_id',
        'latitude',
        'longitude',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerPresensi->totalCount){
    $gridColumnPresensi = [
        ['class' => 'yii\grid\SerialColumn'],
            'presensi_id',
            [
                'attribute' => 'pegawai.pegawai_id',
                'label' => 'Pegawai'
            ],
            [
                'attribute' => 'jadwalpresensi.jadwalpresensi_id',
                'label' => 'Jadwalpresensi'
            ],
            'tgl',
            'status_kehadiran',
            [
                'attribute' => 'cuti.cuti_id',
                'label' => 'Cuti'
            ],
            [
                'attribute' => 'izin.izin_id',
                'label' => 'Izin'
            ],
            'jam_masuk',
            'jam_pulang',
                        'latitude',
            'longitude',
            'keterangan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPresensi,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-presensi']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Presensi'),
        ],
        'export' => false,
        'columns' => $gridColumnPresensi
    ]);
}
?>

    </div>
</div>
