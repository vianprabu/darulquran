<?php

namespace app\models;

use Yii;
use \app\models\base\Pendidikanpegawai as BasePendidikanpegawai;

/**
 * This is the model class for table "pendidikanpegawai".
 */
class Pendidikanpegawai extends BasePendidikanpegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jenjang'], 'string'],
            [['pegawai_id'], 'string', 'max' => 20],
            [['ket_pendidikan'], 'string', 'max' => 250],
            [['is_aktif'], 'string', 'max' => 1]
        ]);
    }
	
}
