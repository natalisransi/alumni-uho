<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Alumni;

/**
 * AlumniSearch represents the model behind the search form about `common\models\Alumni`.
 */
class AlumniSearch extends Alumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumni_id'], 'integer'],
            [['nim', 'nama', 'tanggal_didaftar', 'tgl_ujian_mhs_prodi', 'email', 'jalur_masuk', 'pembiayaan', 'pembimbing1', 'pembimbing2', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'nama_orang_tua', 'alamat_orang_tua', 'nama_sma', 'nama_periode', 'tanggal_yudisium', 'jenjang', 'judul_ta'], 'safe'],
            [['lama_tahun', 'lama_bulan', 'ipk_prodi', 'no_hp', 'tahun_tamat_sma'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Alumni::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'alumni_id' => $this->alumni_id,
            'tanggal_didaftar' => $this->tanggal_didaftar,
            'lama_tahun' => $this->lama_tahun,
            'lama_bulan' => $this->lama_bulan,
            'ipk_prodi' => $this->ipk_prodi,
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_hp' => $this->no_hp,
            'tahun_tamat_sma' => $this->tahun_tamat_sma,
            'tanggal_yudisium' => $this->tanggal_yudisium,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tgl_ujian_mhs_prodi', $this->tgl_ujian_mhs_prodi])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'jalur_masuk', $this->jalur_masuk])
            ->andFilterWhere(['like', 'pembiayaan', $this->pembiayaan])
            ->andFilterWhere(['like', 'pembimbing1', $this->pembimbing1])
            ->andFilterWhere(['like', 'pembimbing2', $this->pembimbing2])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nama_orang_tua', $this->nama_orang_tua])
            ->andFilterWhere(['like', 'alamat_orang_tua', $this->alamat_orang_tua])
            ->andFilterWhere(['like', 'nama_sma', $this->nama_sma])
            ->andFilterWhere(['like', 'nama_periode', $this->nama_periode])
            ->andFilterWhere(['like', 'jenjang', $this->jenjang])
            ->andFilterWhere(['like', 'judul_ta', $this->judul_ta]);

        return $dataProvider;
    }
}
