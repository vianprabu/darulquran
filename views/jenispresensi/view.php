<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenispresensi */

$this->title = $model->jenispresensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenispresensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenispresensi-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenispresensi'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenispresensi_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenispresensi_id], [
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
        'jenispresensi_id',
        'nama_jenispresensi',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerJadwalpresensi->totalCount){
    $gridColumnJadwalpresensi = [
        ['class' => 'yii\grid\SerialColumn'],
            'jadwalpresensi_id',
                        'hari',
            'jadwal_masuk',
            'jadwal_pulang',
            'batas_awal_masuk',
            'batas_akhir_masuk',
            'batas_awal_pulang',
            'batas_akhir_pulang',
            'isaktif',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerJadwalpresensi,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-jadwalpresensi']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Jadwalpresensi'),
        ],
        'export' => false,
        'columns' => $gridColumnJadwalpresensi
    ]);
}
?>

    </div>
</div>
