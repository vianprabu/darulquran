<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "logpresensi".
 *
 * @property string $logpresensi_id
 * @property string $pegawai_id
 * @property string $latitude
 * @property string $longitude
 *
 * @property \app\models\Presensi[] $presensis
 */
class Logpresensi extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'presensis'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'latitude', 'longitude'], 'required'],
            [['logpresensi_id', 'pegawai_id'], 'string', 'max' => 20],
            [['latitude', 'longitude'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logpresensi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'logpresensi_id' => 'Logpresensi ID',
            'pegawai_id' => 'Pegawai ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensis()
    {
        return $this->hasMany(\app\models\Presensi::className(), ['logpresensi_id' => 'logpresensi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\LogpresensiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\LogpresensiQuery(get_called_class());
    }
}
