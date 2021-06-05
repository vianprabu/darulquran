<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anakpegawai;

/**
 * app\models\AnakpegawaiSearch represents the model behind the search form about `app\models\Anakpegawai`.
 */
 class AnakpegawaiSearch extends Anakpegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anak_id', 'pegawai_id', 'nama_anak', 'tempatlahir_anak', 'tgllahir_anak'], 'safe'],
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
        $query = Anakpegawai::find();

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
            'tgllahir_anak' => $this->tgllahir_anak,
        ]);

        $query->andFilterWhere(['like', 'anak_id', $this->anak_id])
            ->andFilterWhere(['like', 'pegawai_id', $this->pegawai_id])
            ->andFilterWhere(['like', 'nama_anak', $this->nama_anak])
            ->andFilterWhere(['like', 'tempatlahir_anak', $this->tempatlahir_anak]);

        return $dataProvider;
    }
}
