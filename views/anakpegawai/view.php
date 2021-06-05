<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Anakpegawai */

?>
<div class="anakpegawai-view">
    <p style="text-align: right"> Home > <a href="index.php?r=anakpegawai/index">Anak Pegawai</a></p>
    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Anakpegawai'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->anak_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->anak_id], [
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
        'anak_id',
        'pegawai_id',
        'nama_anak',
        'tempatlahir_anak',
        'tgllahir_anak',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>
