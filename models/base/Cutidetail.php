<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "cutidetail".
 *
 * @property integer $cutidetail_id
 * @property integer $cuti_id
 * @property string $tgl_cuti
 *
 * @property \app\models\Cuti $cuti
 */
class Cutidetail extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'cuti'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cutidetail_id', 'cuti_id', 'tgl_cuti'], 'required'],
            [['cutidetail_id', 'cuti_id'], 'integer'],
            [['tgl_cuti'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cutidetail';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cutidetail_id' => 'Cutidetail ID',
            'cuti_id' => 'Cuti ID',
            'tgl_cuti' => 'Tgl Cuti',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuti()
    {
        return $this->hasOne(\app\models\Cuti::className(), ['cuti_id' => 'cuti_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\CutidetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\CutidetailQuery(get_called_class());
    }
}
