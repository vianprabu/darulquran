<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jadwalpresensi".
 *
 * @property string $jadwalpresensi_id
 * @property string $jenispresensi_id
 * @property string $hari
 * @property string $jadwal_masuk
 * @property string $jadwal_pulang
 * @property string $batas_awal_masuk
 * @property string $batas_akhir_masuk
 * @property string $batas_awal_pulang
 * @property string $batas_akhir_pulang
 * @property integer $isaktif
 *
 * @property \app\models\Jenispresensi $jenispresensi
 * @property \app\models\JadwalpresensiPegawai[] $jadwalpresensiPegawais
 */
class Jadwalpresensi extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'jenispresensi',
            'jadwalpresensiPegawais'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwalpresensi_id', 'jenispresensi_id', 'hari', 'jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang'], 'required'],
            [['jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang'], 'safe'],
            [['jadwalpresensi_id', 'jenispresensi_id'], 'string', 'max' => 20],
            [['hari'], 'string', 'max' => 10],
            [['isaktif'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwalpresensi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jadwalpresensi_id' => 'Jadwalpresensi ID',
            'jenispresensi_id' => 'Jenispresensi ID',
            'hari' => 'Hari',
            'jadwal_masuk' => 'Jadwal Masuk',
            'jadwal_pulang' => 'Jadwal Pulang',
            'batas_awal_masuk' => 'Batas Awal Masuk',
            'batas_akhir_masuk' => 'Batas Akhir Masuk',
            'batas_awal_pulang' => 'Batas Awal Pulang',
            'batas_akhir_pulang' => 'Batas Akhir Pulang',
            'isaktif' => 'Isaktif',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenispresensi()
    {
        return $this->hasOne(\app\models\Jenispresensi::className(), ['jenispresensi_id' => 'jenispresensi_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalpresensiPegawais()
    {
        return $this->hasMany(\app\models\JadwalpresensiPegawai::className(), ['jadwalpresensi_id' => 'jadwalpresensi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JadwalpresensiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JadwalpresensiQuery(get_called_class());
    }
}
