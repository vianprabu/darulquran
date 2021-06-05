<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Logpresensi;

/**
 * app\models\LogpresensiSearch represents the model behind the search form about `app\models\Logpresensi`.
 */
 class LogpresensiSearch extends Logpresensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logpresensi_id', 'pegawai_id', 'latitude', 'longitude'], 'safe'],
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
        $query = Logpresensi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'logpresensi_id', $this->logpresensi_id])
            ->andFilterWhere(['like', 'pegawai_id', $this->pegawai_id])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude]);

        return $dataProvider;
    }
}
