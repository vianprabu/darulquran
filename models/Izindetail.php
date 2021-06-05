<?php

namespace app\models;

use Yii;
use \app\models\base\Izindetail as BaseIzindetail;

/**
 * This is the model class for table "izindetail".
 */
class Izindetail extends BaseIzindetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['izin_id', 'tgl_izin'], 'required'],
            [['izin_id'], 'integer'],
            [['tgl_izin'], 'safe']
        ]);
    }
	
}
