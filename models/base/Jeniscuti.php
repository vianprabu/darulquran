<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jeniscuti".
 *
 * @property integer $jeniscuti_id
 * @property string $nama_jeniscuti
 *
 * @property \app\models\Cuti[] $cutis
 */
class Jeniscuti extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'cutis'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jeniscuti'], 'required'],
            [['nama_jeniscuti'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jeniscuti';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jeniscuti_id' => 'Jeniscuti ID',
            'nama_jeniscuti' => 'Nama Jeniscuti',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCutis()
    {
        return $this->hasMany(\app\models\Cuti::className(), ['jeniscuti_id' => 'jeniscuti_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JeniscutiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JeniscutiQuery(get_called_class());
    }
}
