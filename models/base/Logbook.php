<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "logbook".
 *
 * @property integer $logbook_id
 * @property integer $targetkinerja_id
 * @property string $uraian_logbook
 * @property string $waktu_awal
 * @property string $waktu_akhir
 * @property double $volume_capaian
 * @property string $keterangan
 *
 * @property \app\models\Targetkinerja $targetkinerja
 */
class Logbook extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'targetkinerja'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['targetkinerja_id', 'uraian_logbook', 'waktu_awal', 'waktu_akhir'], 'required'],
            [['targetkinerja_id'], 'integer'],
            [['waktu_awal', 'waktu_akhir'], 'safe'],
            [['volume_capaian'], 'number'],
            [['uraian_logbook'], 'text']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logbook';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'logbook_id' => 'Logbook ID',
            'targetkinerja_id' => 'Target Kinerja ID',
            'uraian_logbook' => 'Uraian Logbook',
            'waktu_awal' => 'Waktu Awal',
            'waktu_akhir' => 'Waktu Akhir',
            'volume_capaian' => 'Volume Capaian',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTargetkinerja()
    {
        return $this->hasOne(\app\models\Targetkinerja::className(), ['targetkinerja_id' => 'targetkinerja_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\LogbookQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\LogbookQuery(get_called_class());
    }
}
