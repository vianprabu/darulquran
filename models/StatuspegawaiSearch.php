<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Statuspegawai;

/**
 * app\models\StatuspegawaiSearch represents the model behind the search form about `app\models\Statuspegawai`.
 */
 class StatuspegawaiSearch extends Statuspegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statuspegawai_id', 'statuspegawai'], 'safe'],
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
        $query = Statuspegawai::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'statuspegawai_id', $this->statuspegawai_id])
            ->andFilterWhere(['like', 'statuspegawai', $this->statuspegawai]);

        return $dataProvider;
    }
}
