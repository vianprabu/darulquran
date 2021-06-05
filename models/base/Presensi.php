<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "presensi".
 *
 * @property string $presensi_id
 * @property integer $jadwalpresensipegawai_id
 * @property string $tgl
 * @property string $status_kehadiran
 * @property integer $cuti_id
 * @property integer $izin_id
 * @property string $jam_masuk
 * @property string $jam_pulang
 * @property integer $logpresensi_id
 * @property string $latitude
 * @property string $longitude
 * @property string $keterangan
 *
 * @property \app\models\Cuti $cuti
 * @property \app\models\Izin $izin
 * @property \app\models\JadwalpresensiPegawai $jadwalpresensipegawai
 * @property \app\models\Logpresensi $logpresensi
 */
class presensi extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'cuti',
            'izin',
            'jadwalpresensipegawai',
            'logpresensi'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['presensi_id', 'jadwalpresensipegawai_id', 'tgl', 'logpresensi_id', 'longitude'], 'required'],
            [['jadwalpresensipegawai_id', 'cuti_id', 'izin_id', 'logpresensi_id'], 'integer'],
            [['tgl', 'jam_masuk', 'jam_pulang'], 'safe'],
            [['status_kehadiran', 'keterangan'], 'string'],
            [['presensi_id'], 'string', 'max' => 10],
            [['latitude', 'longitude'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'presensi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'presensi_id' => 'Presensi ID',
            'jadwalpresensipegawai_id' => 'Jadwalpresensipegawai ID',
            'tgl' => 'Tgl',
            'status_kehadiran' => 'Status Kehadiran',
            'cuti_id' => 'Cuti ID',
            'izin_id' => 'Izin ID',
            'jam_masuk' => 'Jam Masuk',
            'jam_pulang' => 'Jam Pulang',
            'logpresensi_id' => 'Logpresensi ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'keterangan' => 'Keterangan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuti()
    {
        return $this->hasOne(\app\models\Cuti::className(), ['cuti_id' => 'cuti_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzin()
    {
        return $this->hasOne(\app\models\Izin::className(), ['izin_id' => 'izin_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalpresensipegawai()
    {
        return $this->hasOne(\app\models\JadwalpresensiPegawai::className(), ['jadwalpresensipegawai_id' => 'jadwalpresensipegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogpresensi()
    {
        return $this->hasOne(\app\models\Logpresensi::className(), ['logpresensi_id' => 'logpresensi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\presensiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\presensiQuery(get_called_class());
    }
}
