<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenispegawai".
 *
 * @property string $jenispegawai_id
 * @property string $nama_jenispegawai
 *
 * @property \app\models\Pegawai[] $pegawais
 */
class Jenispegawai extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'pegawais'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenispegawai_id', 'nama_jenispegawai'], 'required'],
            [['jenispegawai_id'], 'string', 'max' => 10],
            [['nama_jenispegawai'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenispegawai';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenispegawai_id' => 'Jenis Pegawai ID',
            'nama_jenispegawai' => 'Nama Jenis Pegawai',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(\app\models\Pegawai::className(), ['jenispegawai_id' => 'jenispegawai_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenispegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenispegawaiQuery(get_called_class());
    }
}
