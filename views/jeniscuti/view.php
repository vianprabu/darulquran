<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniscuti */

$this->title = $model->jeniscuti_id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniscuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jeniscuti-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jeniscuti'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jeniscuti_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jeniscuti_id], [
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
        'jeniscuti_id',
        'nama_jeniscuti',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerCuti->totalCount){
    $gridColumnCuti = [
        ['class' => 'yii\grid\SerialColumn'],
            'cuti_id',
                        [
                'attribute' => 'pegawai.pegawai_id',
                'label' => 'Pegawai'
            ],
            'keterangan_cuti',
            'domisili_cuti',
            'nohp',
            'tgl_pengajuancuti',
            'tgl_cuti',
            'tgl_setujuicuti',
            [
                'attribute' => 'statuspengajuan.statuspengajuan_id',
                'label' => 'Statuspengajuan'
            ],
            'nama_penyetujucuti',
            'file_datadukung',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerCuti,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-cuti']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Cuti'),
        ],
        'export' => false,
        'columns' => $gridColumnCuti
    ]);
}
?>

    </div>
</div>
