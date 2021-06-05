<?php

namespace app\models;

use Yii;
use \app\models\base\Anakpegawai as BaseAnakpegawai;

/**
 * This is the model class for table "anakpegawai".
 */
class Anakpegawai extends BaseAnakpegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['anak_id', 'pegawai_id', 'nama_anak', 'tempatlahir_anak', 'tgllahir_anak'], 'required'],
            [['tgllahir_anak'], 'safe'],
            [['anak_id', 'pegawai_id'], 'string', 'max' => 20],
            [['nama_anak', 'tempatlahir_anak'], 'string', 'max' => 50]
        ]);
    }
	
}
