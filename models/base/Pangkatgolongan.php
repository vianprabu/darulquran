<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pangkatgolongan".
 *
 * @property integer $pangkatgolongan_id
 * @property string $nama_pangkatgolongan
 *
 * @property \app\models\Pegawai[] $pegawais
 */
class Pangkatgolongan extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'pegawais'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_pangkatgolongan'], 'required'],
            [['nama_pangkatgolongan'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pangkatgolongan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pangkatgolongan_id' => 'Pangkat/Golongan ID',
            'nama_pangkatgolongan' => 'Nama Pangkat/Golongan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(\app\models\Pegawai::className(), ['pangkatgolongan_id' => 'pangkatgolongan_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PangkatgolonganQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PangkatgolonganQuery(get_called_class());
    }
}
