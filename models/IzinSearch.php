<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izin;

/**
 * app\models\IzinSearch represents the model behind the search form about `app\models\Izin`.
 */
 class IzinSearch extends Izin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izin_id','jenisizin_id'], 'integer'],
            [['pegawai_id', 'keterangan_izin', 'tgl_pengajuanizin','tgl_awal', 'tgl_tidak_izin', 'tgl_akhir', 'tgl_setujuiizin','pegawai_acc', 'bukti', 'statuspengajuan_id'], 'safe'],
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
        $query = Izin::find();

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
            'izin_id' => $this->izin_id,
            'tgl_pengajuanizin' => $this->tgl_pengajuanizin,
            'tgl_awal' => $this->tgl_awal,
            'tgl_tidak_izin' => $this->tgl_tidak_izin,
            'tgl_akhir' => $this->tgl_akhir,
        ]);

        $query->andFilterWhere(['like', 'pegawai_id', $this->pegawai_id])
            ->andFilterWhere(['like', 'keterangan_izin', $this->keterangan_izin])
            ->andFilterWhere(['like', 'pegawai_acc', $this->pegawai_acc])
            ->andFilterWhere(['like', 'bukti', $this->bukti])
            ->andFilterWhere(['like', 'statuspengajuan_id', $this->statuspengajuan_id]);

        return $dataProvider;
    }
}
