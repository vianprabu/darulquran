<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izindetail;

/**
 * app\models\IzindetailSearch represents the model behind the search form about `app\models\Izindetail`.
 */
 class IzindetailSearch extends Izindetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izindetail_id', 'izin_id'], 'integer'],
            [['tgl_izin'], 'safe'],
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
        $query = Izindetail::find();

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
            'izindetail_id' => $this->izindetail_id,
            'izin_id' => $this->izin_id,
            'tgl_izin' => $this->tgl_izin,
        ]);

        return $dataProvider;
    }
}
