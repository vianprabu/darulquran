<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Pangkatgolongan */

?>
<div class="pangkatgolongan-view">
    <p style="text-align: right"> Home > <a href="index.php?r=pangkatgolongan/index">Pangkat Golongan</a></p>
    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pangkatgolongan'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->pangkatgolongan_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->pangkatgolongan_id], [
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
        'pangkatgolongan_id',
        'nama_pangkatgolongan',
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
            [
                'attribute' => 'pendidikanpegawais.pendidikanpegawai_id',
                'label' => 'Pegawai'
            ],
            'nip',
            'nama_pegawai',
            'jk',
            'tempat_lahir',
            'tgl_lahir',
            'alamat',
            'status_kawin',
            'nama_pasangan',
            [
                'attribute' => 'sekolah.sekolah_id',
                'label' => 'Sekolah'
            ],
            'tmt',
            [
                'attribute' => 'statuspegawai.statuspegawai',
                'label' => 'Statuspegawai'
            ],
                        [
                'attribute' => 'pendidikanpegawai.pendidikanpegawai_id',
                'label' => 'Pendidikanpegawai'
            ],
            'jurusan',
            'nama_sekolah',
            'sertifikasi',
            'status_inpasing',
            [
                'attribute' => 'jenispegawai.jenispegawai_id',
                'label' => 'Jenispegawai'
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
</div>
