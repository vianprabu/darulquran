<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Cuti */

?>
<div class="cuti-view">
    <p style="text-align: right"> Home > <a href="index.php?r=cuti/index">Cuti</a></p>
    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Cuti'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['updatecuti', 'id' => $model->cuti_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->cuti_id], [
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
            'attribute' => 'pegawai.nama_pegawai',
            'label' => 'Pegawai',
        ],
        [
            'attribute' => 'jeniscuti.nama_jeniscuti',
            'label' => 'Jenis Cuti',
        ],
        'keterangan_cuti',
        'domisili_cuti',
        'nohp',
        'tgl_pengajuancuti',
        'tgl_awal',
        'tgl_tidak_cuti',
        'tgl_akhir',
        'tgl_setujuicuti',
        'jml_hari',

        [
            'attribute' => 'statuspengajuan.nama_statuspengajuan',
            'label' => 'Statuspengajuan',
        ],
        'pegawai_acc',
        'file_datadukung',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>
