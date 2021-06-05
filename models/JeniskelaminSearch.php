<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jeniskelamin;

/**
 * app\models\JeniskelaminSearch represents the model behind the search form about `app\models\Jeniskelamin`.
 */
 class JeniskelaminSearch extends Jeniskelamin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jeniskelamin_id', 'namajeniskelamin'], 'safe'],
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
        $query = Jeniskelamin::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'jeniskelamin_id', $this->jeniskelamin_id])
            ->andFilterWhere(['like', 'namajeniskelamin', $this->namajeniskelamin]);

        return $dataProvider;
    }
}
