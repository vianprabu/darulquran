<?php

namespace app\models;

use Yii;
use \app\models\base\Jeniscuti as BaseJeniscuti;

/**
 * This is the model class for table "jeniscuti".
 */
class Jeniscuti extends BaseJeniscuti
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nama_jeniscuti'], 'required'],
            [['nama_jeniscuti'], 'string', 'max' => 20]
        ]);
    }
	
}
