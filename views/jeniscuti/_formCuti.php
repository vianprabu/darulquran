<div class="form-group" id="add-cuti">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'Cuti',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'cuti_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'pegawai_id' => [
            'label' => 'Pegawai',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pegawai::find()->orderBy('pegawai_id')->asArray()->all(), 'pegawai_id', 'pegawai_id'),
                'options' => ['placeholder' => 'Choose Pegawai'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'keterangan_cuti' => ['type' => TabularForm::INPUT_TEXT],
        'domisili_cuti' => ['type' => TabularForm::INPUT_TEXT],
        'nohp' => ['type' => TabularForm::INPUT_TEXT],
        'tgl_pengajuancuti' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Pengajuancuti',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'tgl_cuti' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Cuti',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'tgl_setujuicuti' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Setujuicuti',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'statuspengajuan_id' => [
            'label' => 'Statuspengajuan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Statuspengajuan::find()->orderBy('statuspengajuan_id')->asArray()->all(), 'statuspengajuan_id', 'statuspengajuan_id'),
                'options' => ['placeholder' => 'Choose Statuspengajuan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'nama_penyetujucuti' => ['type' => TabularForm::INPUT_TEXT],
        'file_datadukung' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowCuti(' . $key . '); return false;', 'id' => 'cuti-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Cuti', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCuti()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

