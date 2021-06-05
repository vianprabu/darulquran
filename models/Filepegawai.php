<?php

namespace app\models;

use Yii;
use \app\models\base\Filepegawai as BaseFilepegawai;

/**
 * This is the model class for table "filepegawai".
 */
class Filepegawai extends BaseFilepegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['ukuran'], 'integer'],
            [['tgl_upload', 'tgl_proses'], 'safe'],
            [['namafile'], 'string', 'max' => 50]
        ]);
    }
	
}
