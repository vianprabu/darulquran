<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Filepegawai */

$this->title = $model->file_id;
$this->params['breadcrumbs'][] = ['label' => 'Filepegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filepegawai-view">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->file_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->file_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'file_id',
            'namafile',
            'ukuran',
            'tgl_upload',
            'tgl_proses',
        ],
    ]) ?>


    <p>
        <?php if ($model['tgl_proses'] == null) { ?>
            <?= Html::a('Impor', ['pegawai/import', 'id' => $model->file_id], ['class' => 'btn btn-success', 'onclick' => "return confirm('Tekan ok, untuk mengimpor data excel')"]) ?>
        <?php } else {
        } ?>


    </p>
    <?php ActiveForm::end(); ?>
</div>