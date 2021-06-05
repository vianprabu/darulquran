<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Statuspengajuan;

/**
 * app\models\StatuspengajuanSearch represents the model behind the search form about `app\models\Statuspengajuan`.
 */
 class StatuspengajuanSearch extends Statuspengajuan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statuspengajuan_id', 'ket_statuspengajuan'], 'safe'],
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
        $query = Statuspengajuan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'statuspengajuan_id', $this->statuspengajuan_id])
            ->andFilterWhere(['like', 'ket_statuspengajuan', $this->ket_statuspengajuan]);

        return $dataProvider;
    }
}
