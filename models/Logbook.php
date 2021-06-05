<?php

namespace app\models;

use Yii;
use \app\models\base\Logbook as BaseLogbook;

/**
 * This is the model class for table "logbook".
 */
class Logbook extends BaseLogbook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['targetkinerja_id', 'uraian_logbook', 'waktu_awal', 'waktu_akhir'], 'required'],
            [['targetkinerja_id'], 'integer'],
            [['waktu_awal', 'waktu_akhir'], 'safe'],
            [['volume_capaian'], 'number'],
            [['uraian_logbook', 'keterangan'], 'string', 'max' => 255]
        ]);
    }
	
}
