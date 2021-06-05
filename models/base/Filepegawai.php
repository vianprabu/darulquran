<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "filepegawai".
 *
 * @property integer $file_id
 * @property string $namafile
 * @property integer $ukuran
 * @property string $tgl_upload
 * @property string $tgl_proses
 */
class Filepegawai extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id'], 'required'],
            [['file_id','ukuran'],'integer'],
            [['tgl_upload', 'tgl_proses'], 'safe'],
            [['namafile'], 'file','skipOnEmpty' => false, 'extensions' => 'xlsx', 'on' => 'create'],
            [['file_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filepegawai';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'file_id' => 'File ID',
            'namafile' => 'Namafile',
            'ukuran' => 'Ukuran',
            'tgl_upload' => 'Tgl Upload',
            'tgl_proses' => 'Tgl Proses',
        ];
    }


    /**
     * @inheritdoc
     * @return \app\models\FilepegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\FilepegawaiQuery(get_called_class());
    }
}
