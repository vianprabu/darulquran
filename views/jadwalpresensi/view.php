<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalpresensi */

$this->title = $model->jadwalpresensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalpresensi-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jadwalpresensi'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jadwalpresensi_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jadwalpresensi_id], [
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
        'jadwalpresensi_id',
        [
            'attribute' => 'jenispresensi.jenispresensi_id',
            'label' => 'Jenispresensi',
        ],
        'hari',
        'jadwal_masuk',
        'jadwal_pulang',
        'batas_awal_masuk',
        'batas_akhir_masuk',
        'batas_awal_pulang',
        'batas_akhir_pulang',
        'isaktif',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Jenispresensi<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenispresensi = [
        'nama_jenispresensi',
    ];
    echo DetailView::widget([
        'model' => $model->jenispresensi,
        'attributes' => $gridColumnJenispresensi    ]);
    ?>
    
    <div class="row">
<?php
if($providerJadwalpresensiPegawai->totalCount){
    $gridColumnJadwalpresensiPegawai = [
        ['class' => 'yii\grid\SerialColumn'],
            'jadwalpresensipegawai_id',
            [
                'attribute' => 'pegawai.pegawai_id',
                'label' => 'Pegawai'
            ],
                ];
    echo Gridview::widget([
        'dataProvider' => $providerJadwalpresensiPegawai,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-jadwalpresensi-pegawai']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Jadwalpresensi Pegawai'),
        ],
        'export' => false,
        'columns' => $gridColumnJadwalpresensiPegawai
    ]);
}
?>

    </div>
</div>
