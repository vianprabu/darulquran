<?php

namespace app\models;

use Yii;
use \app\models\base\Targetkinerja as BaseTargetkinerja;

/**
 * This is the model class for table "targetkinerja".
 */
class Targetkinerja extends BaseTargetkinerja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['uraian_target', 'keterangan'], 'required'],
            [['tahun'], 'integer'],
            [['volume'], 'number'],
            [['uraian_target', 'keterangan'], 'string', 'max' => 20],
            [['satuan'], 'string', 'max' => 30]
        ]);
    }
	
}
