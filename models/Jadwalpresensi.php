<?php

namespace app\models;

use Yii;
use \app\models\base\Jadwalpresensi as BaseJadwalpresensi;

/**
 * This is the model class for table "jadwalpresensi".
 */
class Jadwalpresensi extends BaseJadwalpresensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jadwalpresensi_id', 'jenispresensi_id', 'hari', 'jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang'], 'required'],
            [['jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang'], 'safe'],
            [['jadwalpresensi_id', 'jenispresensi_id'], 'string', 'max' => 20],
            [['hari'], 'string', 'max' => 10],
            [['isaktif'], 'string', 'max' => 4]
        ]);
    }
	
}
