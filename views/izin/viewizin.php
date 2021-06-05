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
            
            <?= Html::a('Update', ['updateizin', 'id' => $model->izin_id], ['class' => 'btn btn-primary']) ?>
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
        
        [
            'attribute' => 'pegawai.pegawai_id',
            'label' => 'Pegawai',
        ],
        [
            'attribute' => 'pegawai.nama_pegawai',
            'label' => 'Nama Pegawai',
        ],
        [
            'attribute' => 'jenisizin.nama_jenisizin',
            'label' => 'Jenis Izin',
        ],
        'keterangan_izin',
        'tgl_pengajuanizin',
        'tgl_awal',
        'tgl_tidak_izin',
        'tgl_akhir',
        'tgl_setujuiizin',
        'pegawai_acc',
        [
            'attribute' => 'statuspengajuan.ket_statuspengajuan',
            'label' => 'Status Pengajuan',
        ],
        'bukti',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>

</div>
