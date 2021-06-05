<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "izin".
 *
 * @property integer $izin_id
 * @property string $pegawai_id
 * @property string $keterangan_izin
 * @property string $tgl
 * @property string $bukti
 * @property string $statuspengajuan_id
 *
 * @property \app\models\Pegawai $pegawai
 * @property \app\models\Statuspengajuan $statuspengajuan
 * @property \app\models\Presensi[] $presensis
 */
class Izin extends \yii\db\ActiveRecord
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
            'izindetail'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keterangan_izin','jenisizin_id', 'tgl_pengajuanizin','tgl_awal', 'tgl_akhir', 'bukti'], 'required'],
            [['tgl_pengajuanizin','tgl_awal', 'tgl_akhir', 'tgl_tidak_izin','tgl_setujuiizin'], 'safe'],
            [['pegawai_id', 'pegawai_acc', 'bukti', 'statuspengajuan_id'], 'string', 'max' => 20],
            [['keterangan_izin'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izin';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'izin_id' => 'Izin ID',
            'jenisizin_id' => 'Jenis Izin',
            'pegawai_id' => 'Pegawai',
            'keterangan_izin' => 'Keterangan Izin',
            'tgl_pengajuanizin' => 'Tanggal Pengajuan Izin',
            'tgl_awal' => 'Tanggal Awal Izin',
            'tgl_tidak_izin' => 'Tanggal Tidak Izin',
            'tgl_akhir' => 'Tanggal Akhir Izin',
            'tgl_setujuiizin' => 'Tanggal ACC Izin',
            'pegawai_acc' => 'ACC Oleh',
            'bukti' => 'Bukti',
            'statuspengajuan_id' => 'Statuspengajuan ID',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisizin()
    {
        return $this->hasOne(\app\models\Jenisizin::className(), ['jenisizin_id' => 'jenisizin_id']);
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
        return $this->hasMany(\app\models\Presensi::className(), ['izin_id' => 'izin_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzindetail()
    {
        return $this->hasMany(\app\models\Izindetail::className(), ['izin_id' => 'izin_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\IzinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\IzinQuery(get_called_class());
    }
}
