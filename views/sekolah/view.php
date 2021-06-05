<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Sekolah */


?>
<div class="sekolah-view">
    <p style="text-align: right"> Home > <a href="index.php?r=sekolah/index">Sekolah</a></p>
    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Sekolah'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->sekolah_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->sekolah_id], [
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
        'sekolah_id',
        [
            'attribute' => 'jenjangSekolah.jenjang_sekolah_id',
            'label' => 'Jenjang Sekolah',
        ],
        'nsm',
        'npsn',
        'nama_sekolah',
        'alamat_sekolah',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerPegawai->totalCount){
    $gridColumnPegawai = [
        ['class' => 'yii\grid\SerialColumn'],
            'pegawai_id',
            'nip',
            'nama_pegawai',
            [
                'attribute' => 'jeniskelamins.namajeniskelamin',
                'label' => 'Jenis Kelamin'
            ],
            'tempat_lahir',
            'tgl_lahir',
            'alamat',
            'status_kawin',
            'nama_pasangan',
                        'tmt',
            [
                'attribute' => 'statuspegawai.statuspegawai_id',
                'label' => 'Statuspegawai'
            ],
            [
                'attribute' => 'pangkatgolongan.nama_pangkatgolongan',
                'label' => 'Pangkat/Golongan'
            ],
            [
                'attribute' => 'pendidikanpegawai.jenjang',
                'label' => 'Pendidikan Terakhir'
            ],
            'jurusan',
            'nama_sekolah',
            'sertifikasi',
            'status_inpasing',
            [
                'attribute' => 'jenispegawai.nama_jenispegawai',
                'label' => 'Jenis Pegawai'
            ],
            'tugas_tambahan',
            'kaderisasi_nu',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPegawai,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-pegawai']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Pegawai'),
        ],
        'export' => false,
        'columns' => $gridColumnPegawai
    ]);
}
?>

    </div>
    <div class="row">
        <h4>Jenjang<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenjang = [
        'nama_jenjang',
    ];
    echo DetailView::widget([
        'model' => $model->jenjangSekolah,
        'attributes' => $gridColumnJenjang    ]);
    ?>
</div>
