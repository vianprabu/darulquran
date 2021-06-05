<?php

namespace app\models;

use Yii;
use \app\models\base\presensi as Basepresensi;

/**
 * This is the model class for table "presensi".
 */
class presensi extends Basepresensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['presensi_id', 'jadwalpresensipegawai_id', 'tgl', 'logpresensi_id', 'longitude'], 'required'],
            [['jadwalpresensipegawai_id', 'cuti_id', 'izin_id', 'logpresensi_id'], 'integer'],
            [['tgl', 'jam_masuk', 'jam_pulang'], 'safe'],
            [['status_kehadiran', 'keterangan'], 'string'],
            [['presensi_id'], 'string', 'max' => 10],
            [['latitude', 'longitude'], 'string', 'max' => 50]
        ]);
    }
	
}
