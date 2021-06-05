<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Cutidetail */

$this->title = $model->cutidetail_id;
$this->params['breadcrumbs'][] = ['label' => 'Cutidetail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutidetail-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Cutidetail'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->cutidetail_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->cutidetail_id], [
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
        'cutidetail_id',
        'cuti_id',
        'tgl_cuti',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Cuti<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnCuti = [
        'jeniscuti_id',
        'pegawai_id',
        'keterangan_cuti',
        'domisili_cuti',
        'nohp',
        'tgl_pengajuancuti',
        'tgl_awal',
        'tgl_tidak_cuti',
        'tgl_akhir',
        'tgl_setujuicuti',
        'jml_hari',
        'statuspengajuan_id',
        'pegawai_acc',
        'file_datadukung',
    ];
    echo DetailView::widget([
        'model' => $model->cuti,
        'attributes' => $gridColumnCuti    ]);
    ?>
</div>
