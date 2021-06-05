<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\PresensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Presensi';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="presensi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <p>
        <?= Html::a('Create Presensi', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?= $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        'presensi_id',
        
        [
            'attribute' => 'jadwalpresensipegawai_id',
            'label' => 'Jadwal Presensi Pegawai',
            'value' => function ($model) {
                return $model->jadwalpresensipegawa->jadwalpresensipegawai_id;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalpresensipegawai::find()->asArray()->all(), 'jadwalpresensipegawai_id', 'jadwalpresensipegawai_id'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Jadwalpresensipegawai', 'id' => 'grid-presensi-search-jadwalpresensipegawai_id']
        ],
        'tgl',
        'status_kehadiran',
        [
            'attribute' => 'cuti_id',
            'label' => 'Cuti',
            'value' => function ($model) {
                if ($model->cuti) {
                    return $model->cuti->cuti_id;
                } else {
                    return NULL;
                }
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Cuti::find()->asArray()->all(), 'cuti_id', 'cuti_id'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Cuti', 'id' => 'grid-presensi-search-cuti_id']
        ],
        [
            'attribute' => 'izin_id',
            'label' => 'Izin',
            'value' => function ($model) {
                if ($model->izin) {
                    return $model->izin->izin_id;
                } else {
                    return NULL;
                }
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => \yii\helpers\ArrayHelper::map(\app\models\Izin::find()->asArray()->all(), 'izin_id', 'izin_id'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Izin', 'id' => 'grid-presensi-search-izin_id']
        ],
        'jam_masuk',
        'jam_pulang',
        'logpresensi_id',
        'latitude',
        'longitude',
        'keterangan',
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-presensi']],
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