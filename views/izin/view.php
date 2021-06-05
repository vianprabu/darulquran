<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Izin */

?>
<div class="izin-view">
    <p style="text-align: right"> Home > <a href="index.php?r=izin/index">Izin</a></p>
    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Izin'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->izin_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->izin_id], [
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
        'izin_id',
        [
            'attribute' => 'pegawai.pegawai_id',
            'label' => 'Pegawai',
        ],
        'keterangan_izin',
        'tgl',
        'bukti',
        [
            'attribute' => 'statuspengajuan.statuspengajuan_id',
            'label' => 'Statuspengajuan',
        ],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Pegawai<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPegawai = [
        'nip',
        'nama_pegawai',
        'jk',
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
    ];
    echo DetailView::widget([
        'model' => $model->pegawai,
        'attributes' => $gridColumnPegawai    ]);
    ?>
    <div class="row">
        <h4>Statuspengajuan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnStatuspengajuan = [
        'ket_statuspengajuan',
    ];
    echo DetailView::widget([
        'model' => $model->statuspengajuan,
        'attributes' => $gridColumnStatuspengajuan    ]);
    ?>
    
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
                        'jam_masuk',
            'jam_pulang',
            'lokasi',
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
