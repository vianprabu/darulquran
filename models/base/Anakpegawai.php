<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "anakpegawai".
 *
 * @property string $anak_id
 * @property string $pegawai_id
 * @property string $nama_anak
 * @property string $tempatlahir_anak
 * @property string $tgllahir_anak
 */
class Anakpegawai extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'pegawai'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anak_id', 'pegawai_id', 'nama_anak', 'tempatlahir_anak', 'tgllahir_anak'], 'required'],
            [['tgllahir_anak'], 'safe'],
            [['anak_id', 'pegawai_id'], 'string', 'max' => 20],
            [['nama_anak', 'tempatlahir_anak'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anakpegawai';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'anak_id' => 'Anak ID',
            'pegawai_id' => 'Pegawai ID',
            'nama_anak' => 'Nama Anak',
            'tempatlahir_anak' => 'Tempat Lahir Anak',
            'tgllahir_anak' => 'Tanggal Lahir Anak',
        ];
    }


    /**
     * @inheritdoc
     * @return \app\models\AnakpegawaiQuery the active query used by this AR class.
     */
    public function getPegawai()
    {
        return $this->hasOne(\app\models\Pegawai::className(), ['pegawai_id' => 'pegawai_id']);
    }

    public static function find()
    {
        return new \app\models\AnakpegawaiQuery(get_called_class());
    }
}
