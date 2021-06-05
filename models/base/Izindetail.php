<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "izindetail".
 *
 * @property integer $izindetail_id
 * @property integer $izin_id
 * @property string $tgl_izin
 *
 * @property \app\models\Izin $izin
 */
class Izindetail extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'izin'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izin_id', 'tgl_izin'], 'required'],
            [['izin_id'], 'integer'],
            [['tgl_izin'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izindetail';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'izindetail_id' => 'Izindetail ID',
            'izin_id' => 'Izin ID',
            'tgl_izin' => 'Tgl Izin',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzin()
    {
        return $this->hasOne(\app\models\Izin::className(), ['izin_id' => 'izin_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\IzindetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\IzindetailQuery(get_called_class());
    }
}
