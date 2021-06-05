<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Izindetail */

$this->title = $model->izindetail_id;
$this->params['breadcrumbs'][] = ['label' => 'Izindetail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izindetail-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Izindetail'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->izindetail_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->izindetail_id], [
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
        'izindetail_id',
        [
            'attribute' => 'izin.izin_id',
            'label' => 'Izin',
        ],
        'tgl_izin',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Izin<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnIzin = [
        'jenisizin_id',
        'pegawai_id',
        'keterangan_izin',
        'tgl_pengajuanizin',
        'tgl_awal',
        'tgl_tidak_izin',
        'tgl_akhir',
        'tgl_setujuiizin',
        'pegawai_acc',
        'bukti',
        'statuspengajuan_id',
    ];
    echo DetailView::widget([
        'model' => $model->izin,
        'attributes' => $gridColumnIzin    ]);
    ?>
</div>
