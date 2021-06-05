<?php

namespace app\models;

use Yii;
use \app\models\base\Jenispresensi as BaseJenispresensi;

/**
 * This is the model class for table "jenispresensi".
 */
class Jenispresensi extends BaseJenispresensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jenispresensi_id', 'nama_jenispresensi'], 'required'],
            [['jenispresensi_id', 'nama_jenispresensi'], 'string', 'max' => 20]
        ]);
    }
	
}
