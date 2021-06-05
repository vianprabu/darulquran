<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pegawai".
 *
 * @property string $pegawai_id
 * @property string $nip
 * @property string $nama_pegawai
 * @property string $jk
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $status_kawin
 * @property string $nama_pasangan
 * @property integer $sekolah_id
 * @property string $tmt
 * @property string $statuspegawai_id
 * @property integer $pangkatgolongan_id
 * @property integer $pendidikanpegawai_id
 * @property string $jurusan
 * @property string $nama_sekolah
 * @property string $sertifikasi
 * @property string $status_inpasing
 * @property string $jenispegawai_id
 * @property string $tugas_tambahan
 * @property string $kaderisasi_nu
 *
 * @property \app\models\Cuti[] $cutis
 * @property \app\models\Izin[] $izins
 * @property \app\models\Jenispegawai $jenispegawai
 * @property \app\models\Pangkatgolongan $pangkatgolongan
 * @property \app\models\Pendidikanpegawai $pendidikanpegawai
 * @property \app\models\Sekolah $sekolah
 * @property \app\models\Statuspegawai $statuspegawai
 */
class Pegawai extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    public $importFile;

    const SCENARIO_IMPORT = 'import';
    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'jeniskelamins',
            'cutis',
            'izins',
            'jenispegawai',
            'pangkatgolongan',
            'pendidikanpegawai',
            'sekolah',
            'statuspegawai',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['importFile'],'required','on' => self::SCENARIO_IMPORT],
            [['pegawai_id', 'nik', 'nama_pegawai', 'jeniskelamin_id', 'tempat_lahir', 'tgl_lahir', 'alamat', 'status_kawin', 'sekolah_id', 'jenispegawai_id', 'tugas_tambahan'], 'required'],
            [['tgl_lahir', 'tmt'], 'safe'],
            [['sekolah_id', 'pangkatgolongan_id', 'pendidikanpegawai_id'], 'integer'],
            [['pin_pegawai'], 'string', 'max' => 10],
            [['pegawai_id', 'statuspegawai_id','nokartu_pegawai'], 'string', 'max' => 20],
            [['nik','nip', 'jurusan', 'nama_sekolah', 'tugas_tambahan'], 'string', 'max' => 30],
            [['nama_pegawai'], 'string', 'max' => 100],
            [['jeniskelamin_id'], 'string', 'max' => 1],
            [['tempat_lahir', 'nama_pasangan'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 150],
            [['status_kawin', 'sertifikasi', 'status_inpasing', 'jenispegawai_id', 'kaderisasi_nu'], 'string', 'max' => 10],
            [['foto_pegawai'], 'file','skipOnEmpty' => true, 'extensions' => 'jpg', 'maxSize' => 1024*1024, 'on' => 'create'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pegawai_id' => 'Pegawai ID',
            'nip' => 'NIP',
            'nik' => 'NIK',
            'nama_pegawai' => 'Nama Pegawai',
            'jeniskelamin_id' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'status_kawin' => 'Status Kawin',
            'nama_pasangan' => 'Nama Pasangan',
            'sekolah_id' => 'SATMINKAL',
            'tmt' => 'TMT',
            'statuspegawai_id' => 'Status Pegawai',
            'pangkatgolongan_id' => 'Pangkat/Golongan',
            'pendidikanpegawai_id' => 'Pendidikan Terakhir',
            'jurusan' => 'Jurusan',
            'nama_sekolah' => 'Nama Sekolah/Perguruan Tinggi',
            'sertifikasi' => 'Sertifikasi',
            'status_inpasing' => 'Status Inpasing',
            'jenispegawai_id' => 'Jenis Pegawai',
            'tugas_tambahan' => 'Tugas Tambahan',
            'kaderisasi_nu' => 'Kaderisasi NU',
            'foto_pegawai' => 'Foto',
            'nokartu_pegawai' => 'Nomor Kartu',
            'pin_pegawai' => 'PIN'
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJeniskelamins()
    {
        return $this->hasOne(\app\models\Jeniskelamin::className(), ['jeniskelamin_id' => 'jeniskelamin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCutis()
    {
        return $this->hasMany(\app\models\Cuti::className(), ['pegawai_id' => 'pegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzins()
    {
        return $this->hasMany(\app\models\Izin::className(), ['pegawai_id' => 'pegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenispegawai()
    {
        return $this->hasOne(\app\models\Jenispegawai::className(), ['jenispegawai_id' => 'jenispegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPangkatgolongan()
    {
        return $this->hasOne(\app\models\Pangkatgolongan::className(), ['pangkatgolongan_id' => 'pangkatgolongan_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikanpegawai()
    {
        return $this->hasOne(\app\models\Pendidikanpegawai::className(), ['pendidikanpegawai_id' => 'pendidikanpegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSekolah()
    {
        return $this->hasOne(\app\models\Sekolah::className(), ['sekolah_id' => 'sekolah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatuspegawai()
    {
        return $this->hasOne(\app\models\Statuspegawai::className(), ['statuspegawai_id' => 'statuspegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    

    /**
     * @inheritdoc
     * @return \app\models\PegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PegawaiQuery(get_called_class());
    }
}
