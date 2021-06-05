<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenispresensi".
 *
 * @property string $jenispresensi_id
 * @property string $nama_jenispresensi
 *
 * @property \app\models\Jadwalpresensi[] $jadwalpresensis
 */
class Jenispresensi extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'jadwalpresensis'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenispresensi_id', 'nama_jenispresensi'], 'required'],
            [['jenispresensi_id', 'nama_jenispresensi'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenispresensi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenispresensi_id' => 'Jenispresensi ID',
            'nama_jenispresensi' => 'Nama Jenispresensi',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalpresensis()
    {
        return $this->hasMany(\app\models\Jadwalpresensi::className(), ['jenispresensi_id' => 'jenispresensi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenispresensiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenispresensiQuery(get_called_class());
    }
}
