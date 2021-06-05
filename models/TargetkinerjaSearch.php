<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Targetkinerja;

/**
 * app\models\TargetkinerjaSearch represents the model behind the search form about `app\models\Targetkinerja`.
 */
 class TargetkinerjaSearch extends Targetkinerja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['targetkinerja_id', 'tahun'], 'integer'],
            [['pegawai_id','uraian_target', 'satuan'], 'safe'],
            [['volume'], 'number'],
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
        $query = Targetkinerja::find();

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
            'targetkinerja_id' => $this->targetkinerja_id,
            'tahun' => $this->tahun,
            'volume' => $this->volume,
        ]);

        $query->andFilterWhere(['like', 'uraian_target', $this->uraian_target])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'pegawai_id', $this->pegawai_id]);

        return $dataProvider;
    }
}
