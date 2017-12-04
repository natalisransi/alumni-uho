<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "alumni".
 *
 * @property integer $alumni_id
 * @property string $nim
 * @property string $nama
 * @property string $tanggal_didaftar
 * @property double $lama_tahun
 * @property double $lama_bulan
 * @property double $ipk_prodi
 * @property string $tgl_ujian_mhs_prodi
 * @property string $email
 * @property string $jalur_masuk
 * @property string $pembiayaan
 * @property string $pembimbing1
 * @property string $pembimbing2
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property double $no_hp
 * @property string $nama_orang_tua
 * @property string $alamat_orang_tua
 * @property string $nama_sma
 * @property double $tahun_tamat_sma
 * @property string $nama_periode
 * @property string $tanggal_yudisium
 * @property string $jenjang
 * @property string $judul_ta
 */
class Alumni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal_didaftar', 'tanggal_lahir', 'tanggal_yudisium'], 'safe'],
            [['lama_tahun', 'lama_bulan', 'ipk_prodi', 'no_hp', 'tahun_tamat_sma'], 'number'],
            [['nim', 'nama', 'tgl_ujian_mhs_prodi', 'email', 'jalur_masuk', 'pembiayaan', 'pembimbing1', 'pembimbing2', 'tempat_lahir', 'jenis_kelamin', 'alamat', 'nama_orang_tua', 'alamat_orang_tua', 'nama_sma', 'nama_periode', 'jenjang', 'judul_ta'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'alumni_id' => 'Alumni ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'tanggal_didaftar' => 'Tanggal Didaftar',
            'lama_tahun' => 'Lama Tahun',
            'lama_bulan' => 'Lama Bulan',
            'ipk_prodi' => 'Ipk Prodi',
            'tgl_ujian_mhs_prodi' => 'Tgl Ujian Mhs Prodi',
            'email' => 'Email',
            'jalur_masuk' => 'Jalur Masuk',
            'pembiayaan' => 'Pembiayaan',
            'pembimbing1' => 'Pembimbing1',
            'pembimbing2' => 'Pembimbing2',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'nama_orang_tua' => 'Nama Orang Tua',
            'alamat_orang_tua' => 'Alamat Orang Tua',
            'nama_sma' => 'Nama Sma',
            'tahun_tamat_sma' => 'Tahun Tamat Sma',
            'nama_periode' => 'Nama Periode',
            'tanggal_yudisium' => 'Tanggal Yudisium',
            'jenjang' => 'Jenjang',
            'judul_ta' => 'Judul Ta',
        ];
    }
}
