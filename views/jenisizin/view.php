<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisizin */

$this->title = $model->jenisizin_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenisizin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisizin-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenisizin'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenisizin_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenisizin_id], [
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
        'jenisizin_id',
        'nama_jenisizin',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerIzin->totalCount){
    $gridColumnIzin = [
        ['class' => 'yii\grid\SerialColumn'],
            'izin_id',
                        [
                'attribute' => 'pegawai.pegawai_id',
                'label' => 'Pegawai'
            ],
            'keterangan_izin',
            'tgl_pengajuanizin',
            'tgl_izin',
            'nama_penyetujuizin',
            'tgl_setujuiizin',
            'bukti',
            [
                'attribute' => 'statuspengajuan.statuspengajuan_id',
                'label' => 'Statuspengajuan'
            ],
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzin,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-izin']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Izin'),
        ],
        'export' => false,
        'columns' => $gridColumnIzin
    ]);
}
?>

    </div>
</div>
