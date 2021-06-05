<div class="form-group" id="add-pegawai">
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
    'formName' => 'Pegawai',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'pegawai_id' => [
            'label' => 'Pendidikanpegawai',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikanpegawai::find()->orderBy('pendidikanpegawai_id')->asArray()->all(), 'pegawai_id', 'pendidikanpegawai_id'),
                'options' => ['placeholder' => 'Choose Pendidikanpegawai'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'nip' => ['type' => TabularForm::INPUT_TEXT],
        'nama_pegawai' => ['type' => TabularForm::INPUT_TEXT],
        'jk' => ['type' => TabularForm::INPUT_TEXT],
        'tempat_lahir' => ['type' => TabularForm::INPUT_TEXT],
        'tgl_lahir' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Lahir',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'alamat' => ['type' => TabularForm::INPUT_TEXT],
        'status_kawin' => ['type' => TabularForm::INPUT_TEXT],
        'nama_pasangan' => ['type' => TabularForm::INPUT_TEXT],
        'sekolah_id' => [
            'label' => 'Sekolah',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->orderBy('sekolah_id')->asArray()->all(), 'sekolah_id', 'sekolah_id'),
                'options' => ['placeholder' => 'Choose Sekolah'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'tmt' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tmt',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'statuspegawai_id' => [
            'label' => 'Statuspegawai',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Statuspegawai::find()->orderBy('statuspegawai')->asArray()->all(), 'statuspegawai_id', 'statuspegawai'),
                'options' => ['placeholder' => 'Choose Statuspegawai'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'pangkatgolongan_id' => [
            'label' => 'Pangkatgolongan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pangkatgolongan::find()->orderBy('pangkatgolongan_id')->asArray()->all(), 'pangkatgolongan_id', 'pangkatgolongan_id'),
                'options' => ['placeholder' => 'Choose Pangkatgolongan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'pendidikanpegawai_id' => [
            'label' => 'Pendidikanpegawai',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikanpegawai::find()->orderBy('pendidikanpegawai_id')->asArray()->all(), 'pendidikanpegawai_id', 'pendidikanpegawai_id'),
                'options' => ['placeholder' => 'Choose Pendidikanpegawai'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jurusan' => ['type' => TabularForm::INPUT_TEXT],
        'nama_sekolah' => ['type' => TabularForm::INPUT_TEXT],
        'sertifikasi' => ['type' => TabularForm::INPUT_TEXT],
        'status_inpasing' => ['type' => TabularForm::INPUT_TEXT],
        'tugas_tambahan' => ['type' => TabularForm::INPUT_TEXT],
        'kaderisasi_nu' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPegawai(' . $key . '); return false;', 'id' => 'pegawai-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Pegawai', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPegawai()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

