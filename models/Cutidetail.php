<?php

namespace app\models;

use Yii;
use \app\models\base\Cutidetail as BaseCutidetail;

/**
 * This is the model class for table "cutidetail".
 */
class Cutidetail extends BaseCutidetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['cutidetail_id', 'cuti_id', 'tgl_cuti'], 'required'],
            [['cutidetail_id', 'cuti_id'], 'integer'],
            [['tgl_cuti'], 'safe']
        ]);
    }
	
}
