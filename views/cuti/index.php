<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\CutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Cuti';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="cuti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <p>
        <?= Html::a('Create Cuti', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?= $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        'cuti_id',
        [
            'attribute' => 'pegawai_id',
            'label' => 'Pegawai',
            'value' => function ($model) {
                if ($model->pegawai) {
                    return $model->pegawai->pegawai_id;
                } else {
                    return NULL;
                }
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pegawai::find()->asArray()->all(), 'pegawai_id', 'pegawai_id'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Pegawai', 'id' => 'grid-cuti-search-pegawai_id']
        ],

        [
            'attribute' => 'pegawai.nama_pegawai',
            'label' => 'Pegawai',
            'value' => function ($model) {
                if ($model->pegawai) {
                    return $model->pegawai->nama_pegawai;
                } else {
                    return NULL;
                }
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pegawai::find()->asArray()->all(), 'pegawai_id', 'nama_pegawai'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Pegawai', 'id' => 'grid-cuti-search-pegawai_id']
        ],

        [
            'attribute' => 'jeniscuti.nama_jeniscuti',
            'label' => 'Jenis Cuti',
            'value' => function ($model) {
                if ($model->jeniscuti) {
                    return $model->jeniscuti->nama_jeniscuti;
                } else {
                    return NULL;
                }
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jeniscuti::find()->asArray()->all(), 'jeniscuti_id', 'nama_jeniscuti'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Jeniscuti', 'id' => 'grid-cuti-search-jeniscuti_id']
        ],
        'keterangan_cuti',
        'tgl_pengajuancuti',
        'tgl_awal',
        'tgl_tidak_cuti',
        'tgl_akhir',
        'tgl_setujuicuti',
        'pegawai_acc',
        [
            'attribute' => 'statuspengajuan_id',
            'label' => 'Statuspengajuan',
            'value' => function ($model) {
                return $model->statuspengajuan->statuspengajuan_id;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Statuspengajuan::find()->asArray()->all(), 'statuspengajuan_id', 'statuspengajuan_id'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Statuspengajuan', 'id' => 'grid-cuti-search-statuspengajuan_id']
        ],
        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ];
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'responsiveWrap' => false,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-cuti']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'export' => false,
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumn,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'dropdownOptions' => [
                    'label' => 'Full',
                    'class' => 'btn btn-default',
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false
                ]
            ]),
        ],
    ]); ?>

</div>