<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenispresensi;

/**
 * app\models\JenispresensiSearch represents the model behind the search form about `app\models\Jenispresensi`.
 */
 class JenispresensiSearch extends Jenispresensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenispresensi_id', 'nama_jenispresensi'], 'safe'],
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
        $query = Jenispresensi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'jenispresensi_id', $this->jenispresensi_id])
            ->andFilterWhere(['like', 'nama_jenispresensi', $this->nama_jenispresensi]);

        return $dataProvider;
    }
}
