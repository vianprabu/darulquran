<?php

namespace app\models;

use Yii;
use \app\models\base\Logpresensi as BaseLogpresensi;

/**
 * This is the model class for table "logpresensi".
 */
class Logpresensi extends BaseLogpresensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['logpresensi_id', 'pegawai_id', 'latitude', 'longitude'], 'required'],
            [['logpresensi_id', 'pegawai_id'], 'string', 'max' => 20],
            [['latitude', 'longitude'], 'string', 'max' => 50]
        ]);
    }
	
}
