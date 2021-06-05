<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */

?>
<div class="pegawai-view">
    <p style="text-align: right"> Home > <a href="index.php?r=pegawai/index">Pegawai</a></p>
    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pegawai'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->pegawai_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->pegawai_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>
    <?php 
    $pic = \Yii::getAlias('fotopegawai/') . $model['foto_pegawai']; 
    if (file_exists($pic)) : ?>
                <!-- jika ada usernamenya maka tampilkan foto berdasarkan pegawai_id -->
                <img src="fotopegawai/<?= $model['foto_pegawai']; ?>" alt="" class="img-thumbnail" width="200px;" height="auto" onerror="this.onerror=null; this.src='fotopegawai/default.jpg';">
            <?php else : ?>
                <!-- jika tidak ada fotonya maka tampilkan foto default -->
                <img src="fotopegawai/default.jpg" alt="https://icon-library.net/icon/default-profile-icon-17.html" width="200px;" height="auto" onerror="this.onerror=null; this.src='fotopegawai/default.jpg';">
            <?php endif; ?><br><br>

    <div class="row">
<?php 
    $gridColumn = [
        'pegawai_id',
        'nik',
        'nip',
        'nama_pegawai',
        [
            'attribute' => 'jeniskelamins.namajeniskelamin',
            'label' => 'Jenis Kelamin',
        ],
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'status_kawin',
        'nama_pasangan',
        [
            'attribute' => 'sekolah.sekolah_id',
            'label' => 'Sekolah',
        ],
        'tmt',
        [
            'attribute' => 'statuspegawai.statuspegawai',
            'label' => 'Statuspegawai',
        ],
        [
            'attribute' => 'pangkatgolongan.pangkatgolongan_id',
            'label' => 'Pangkatgolongan',
        ],
        [
            'attribute' => 'pendidikanpegawai.pendidikanpegawai_id',
            'label' => 'Pendidikanpegawai',
        ],
        'jurusan',
        'nama_sekolah',
        'sertifikasi',
        'status_inpasing',
        [
            'attribute' => 'jenispegawai.jenispegawai_id',
            'label' => 'Jenispegawai',
        ],
        'tugas_tambahan',
        'kaderisasi_nu',
        'nokartu_pegawai',
        'pin_pegawai'
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>
