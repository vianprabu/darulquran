<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jadwalpresensi_pegawai".
 *
 * @property integer $jadwalpresensipegawai_id
 * @property string $pegawai_id
 * @property string $jadwalpresensi_id
 *
 * @property \app\models\Jadwalpresensi $jadwalpresensi
 * @property \app\models\Pegawai $pegawai
 * @property \app\models\Presensi[] $presensis
 */
class JadwalpresensiPegawai extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'jadwalpresensi',
            'pegawai',
            'presensis'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'jadwalpresensi_id'], 'required'],
            [['pegawai_id', 'jadwalpresensi_id'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwalpresensi_pegawai';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jadwalpresensipegawai_id' => 'Jadwalpresensipegawai ID',
            'pegawai_id' => 'Pegawai ID',
            'jadwalpresensi_id' => 'Jadwalpresensi ID',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalpresensi()
    {
        return $this->hasOne(\app\models\Jadwalpresensi::className(), ['jadwalpresensi_id' => 'jadwalpresensi_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(\app\models\Pegawai::className(), ['pegawai_id' => 'pegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensis()
    {
        return $this->hasMany(\app\models\Presensi::className(), ['jadwalpresensipegawai_id' => 'jadwalpresensipegawai_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JadwalpresensiPegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JadwalpresensiPegawaiQuery(get_called_class());
    }
}
