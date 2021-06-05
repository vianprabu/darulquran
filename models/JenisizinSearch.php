<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenisizin;

/**
 * app\models\JenisizinSearch represents the model behind the search form about `app\models\Jenisizin`.
 */
 class JenisizinSearch extends Jenisizin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenisizin_id'], 'integer'],
            [['nama_jenisizin'], 'safe'],
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
        $query = Jenisizin::find();

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
            'jenisizin_id' => $this->jenisizin_id,
        ]);

        $query->andFilterWhere(['like', 'nama_jenisizin', $this->nama_jenisizin]);

        return $dataProvider;
    }
}
