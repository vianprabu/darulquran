<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalpresensiPegawai */

$this->title = $model->jadwalpresensipegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensi Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalpresensi-pegawai-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jadwalpresensi Pegawai'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jadwalpresensipegawai_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jadwalpresensipegawai_id], [
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
        'jadwalpresensipegawai_id',
        [
            'attribute' => 'pegawai.pegawai_id',
            'label' => 'Pegawai',
        ],
        [
            'attribute' => 'jadwalpresensi.jadwalpresensi_id',
            'label' => 'Jadwalpresensi',
        ],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Jadwalpresensi<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJadwalpresensi = [
        'jenispresensi_id',
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
        'model' => $model->jadwalpresensi,
        'attributes' => $gridColumnJadwalpresensi    ]);
    ?>
    <div class="row">
        <h4>Pegawai<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPegawai = [
        'nik',
        'nip',
        'nama_pegawai',
        'jeniskelamin_id',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'status_kawin',
        'nama_pasangan',
        'sekolah_id',
        'tmt',
        'statuspegawai_id',
        'pangkatgolongan_id',
        'pendidikanpegawai_id',
        'jurusan',
        'nama_sekolah',
        'sertifikasi',
        'status_inpasing',
        'jenispegawai_id',
        'tugas_tambahan',
        'kaderisasi_nu',
        'foto_pegawai',
        'nokartu_pegawai',
        'pin_pegawai',
    ];
    echo DetailView::widget([
        'model' => $model->pegawai,
        'attributes' => $gridColumnPegawai    ]);
    ?>
    
    <div class="row">
<?php
if($providerPresensi->totalCount){
    $gridColumnPresensi = [
        ['class' => 'yii\grid\SerialColumn'],
            'presensi_id',
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
            [
                'attribute' => 'logpresensi.logpresensi_id',
                'label' => 'Logpresensi'
            ],
            'latitude',
            'longitude',
            'keterangan:ntext',
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
