<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Logbook;

/**
 * app\models\LogbookSearch represents the model behind the search form about `app\models\Logbook`.
 */
 class LogbookSearch extends Logbook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logbook_id', 'targetkinerja_id'], 'integer'],
            [['uraian_logbook', 'waktu_awal', 'waktu_akhir'], 'safe'],
            [['volume_capaian'], 'number'],
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
        $query = Logbook::find();

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
            'logbook_id' => $this->logbook_id,
            'targetkinerja_id' => $this->targetkinerja_id,
            'waktu_awal' => $this->waktu_awal,
            'waktu_akhir' => $this->waktu_akhir,
            'volume_capaian' => $this->volume_capaian,
        ]);

        $query->andFilterWhere(['like', 'uraian_logbook', $this->uraian_logbook]);

        return $dataProvider;
    }
}
