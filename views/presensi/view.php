<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Presensi */

$this->title = $model->presensi_id;
$this->params['breadcrumbs'][] = ['label' => 'Presensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presensi-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Presensi'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->presensi_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->presensi_id], [
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
        'presensi_id',
        [
            'attribute' => 'jadwalpresensipegawai.jadwalpresensipegawai_id',
            'label' => 'Jadwalpresensipegawai',
        ],
        'tgl',
        'status_kehadiran',
        [
            'attribute' => 'cuti.cuti_id',
            'label' => 'Cuti',
        ],
        [
            'attribute' => 'izin.izin_id',
            'label' => 'Izin',
        ],
        'jam_masuk',
        'jam_pulang',
        [
            'attribute' => 'logpresensi.logpresensi_id',
            'label' => 'Logpresensi',
        ],
        'latitude',
        'longitude',
        'keterangan:ntext',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
</div>
