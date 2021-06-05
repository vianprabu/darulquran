<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Presensi;

/**
 * app\models\PresensiSearch represents the model behind the search form about `app\models\Presensi`.
 */
 class PresensiSearch extends Presensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['presensi_id', 'tgl', 'status_kehadiran', 'jam_masuk', 'jam_pulang', 'latitude', 'longitude', 'keterangan'], 'safe'],
            [['jadwalpresensipegawai_id', 'cuti_id', 'izin_id', 'logpresensi_id'], 'integer'],
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
        $query = Presensi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'jadwalpresensipegawai_id' => $this->jadwalpresensipegawai_id,
            'tgl' => $this->tgl,
            'cuti_id' => $this->cuti_id,
            'izin_id' => $this->izin_id,
            'jam_masuk' => $this->jam_masuk,
            'jam_pulang' => $this->jam_pulang,
            'logpresensi_id' => $this->logpresensi_id,
        ]);

        $query->andFilterWhere(['like', 'presensi_id', $this->presensi_id])
            ->andFilterWhere(['like', 'status_kehadiran', $this->status_kehadiran])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
