<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "cuti".
 *
 * @property integer $cuti_id
 * @property string $pegawai_id
 * @property string $keterangan_cuti
 * @property string $tgl
 * @property string $statuspengajuan_id
 * @property string $bukti
 *
 * @property \app\models\Pegawai $pegawai
 * @property \app\models\Statuspengajuan $statuspengajuan
 * @property \app\models\Presensi[] $presensis
 */
class Cuti extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
     * This function helps \mootensai\relation\RelationTrait runs faster
     * @return array relation names of this model
     */
    public function relationNames()
    {
        return [
            'pegawai',
            'statuspengajuan',
            'presensis',
            'cutidetail'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keterangan_cuti', 'jeniscuti_id', 'domisili_cuti', 'nohp', 'tgl_pengajuancuti', 'tgl_awal', 'tgl_akhir'], 'required'],
            [['tgl_pengajuancuti', 'tgl_awal', 'tgl_akhir', 'tgl_setujuicuti'], 'safe'],
            [['nohp'], 'string', 'max' => 15],
            [['pegawai_id', 'statuspengajuan_id', 'pegawai_acc', 'file_datadukung'], 'string', 'max' => 20],
            [['domisili_cuti'], 'string', 'max' => 50],
            [['keterangan_cuti'], 'string', 'max' => 255],
            [['tgl_tidak_cuti'], 'string', 'max' => 400],
            [['file_datadukung'], 'file','skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, pdf, docx, xlsx, pptx'],

            //belum (jeniscuti_id, file_datadukung )
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuti';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cuti_id' => 'Cuti ID',
            'jeniscuti_id' => 'Jenis Cuti',
            'pegawai_id' => 'Pegawai ID',
            'keterangan_cuti' => 'Keterangan Cuti',
            'domisili_cuti' => 'Domisili Cuti',
            'nohp' => 'No HP',
            'tgl_pengajuancuti' => 'Tanggal Pengajuan Cuti',
            'tgl_awal' => 'Tanggal Awal Cuti',
            'tgl_tidak_cuti' => 'Tanggal Tidak Cuti',
            'tgl_akhir' => 'Tanggal Akhir Cuti',
            'tgl_setujuicuti' => 'Tanggal ACC Cuti',
            'jml_hari' => 'Jumlah Hari Cuti',
            'pegawai_acc' => 'ACC Oleh',
            'statuspengajuan_id' => 'Status Pengajuan',
            'file_datadukung' => 'File Datadukung',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJeniscuti()
    {
        return $this->hasOne(\app\models\Jeniscuti::className(), ['jeniscuti_id' => 'jeniscuti_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(\app\models\Pegawai::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatuspengajuan()
    {
        return $this->hasOne(\app\models\Statuspengajuan::className(), ['statuspengajuan_id' => 'statuspengajuan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensis()
    {
        return $this->hasMany(\app\models\Presensi::className(), ['cuti_id' => 'cuti_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCutidetail()
    {
        return $this->hasMany(\app\models\Cutidetail::className(), ['cuti_id' => 'cuti_id']);
    }


    /**
     * @inheritdoc
     * @return \app\models\CutiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\CutiQuery(get_called_class());
    }
}
