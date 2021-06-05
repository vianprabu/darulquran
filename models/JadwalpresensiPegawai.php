<?php

namespace app\models;

use Yii;
use \app\models\base\JadwalpresensiPegawai as BaseJadwalpresensiPegawai;

/**
 * This is the model class for table "jadwalpresensi_pegawai".
 */
class JadwalpresensiPegawai extends BaseJadwalpresensiPegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['pegawai_id', 'jadwalpresensi_id'], 'required'],
            [['pegawai_id', 'jadwalpresensi_id'], 'string', 'max' => 20]
        ]);
    }
	
}
