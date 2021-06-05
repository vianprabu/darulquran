<?php

namespace app\models;

use Yii;
use \app\models\base\Jenisizin as BaseJenisizin;

/**
 * This is the model class for table "jenisizin".
 */
class Jenisizin extends BaseJenisizin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nama_jenisizin'], 'required'],
            [['nama_jenisizin'], 'string', 'max' => 20]
        ]);
    }
	
}
