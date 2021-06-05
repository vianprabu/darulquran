<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "targetkinerja".
 *
 * @property integer $targetkinerja_id
 * @property string $uraian_target
 * @property integer $tahun
 * @property double $volume
 * @property string $satuan
 * @property string $keterangan
 *
 * @property \app\models\Logbook[] $logbooks
 */
class Targetkinerja extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'logbooks',
            'pegawai'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'uraian_target', 'keterangan'], 'required'],
            [['tahun'], 'integer'],
            [['volume'], 'number'],
            [['uraian_target'], 'text'],
            [['satuan'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'targetkinerja';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'targetkinerja_id' => 'Targetkinerja ID',
            'pegawai_id' => 'Pegawai ID',
            'uraian_target' => 'Uraian Target',
            'tahun' => 'Tahun',
            'volume' => 'Volume',
            'satuan' => 'Satuan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogbooks()
    {
        return $this->hasMany(\app\models\Logbook::className(), ['targetkinerja_id' => 'targetkinerja_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasMany(\app\models\Pegawai::className(), ['pegawai_id' => 'pegawai_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\TargetkinerjaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TargetkinerjaQuery(get_called_class());
    }
}
