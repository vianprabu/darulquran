<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pangkatgolongan;

/**
 * app\models\PangkatgolonganSearch represents the model behind the search form about `app\models\Pangkatgolongan`.
 */
 class PangkatgolonganSearch extends Pangkatgolongan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pangkatgolongan_id'], 'integer'],
            [['nama_pangkatgolongan'], 'safe'],
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
        $query = Pangkatgolongan::find();

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
            'pangkatgolongan_id' => $this->pangkatgolongan_id,
        ]);

        $query->andFilterWhere(['like', 'nama_pangkatgolongan', $this->nama_pangkatgolongan]);

        return $dataProvider;
    }
}
