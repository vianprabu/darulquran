<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Filepegawai;

/**
 * app\models\FilepegawaiSearch represents the model behind the search form about `app\models\Filepegawai`.
 */
 class FilepegawaiSearch extends Filepegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'ukuran'], 'integer'],
            [['namafile', 'tgl_upload', 'tgl_proses'], 'safe'],
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
        $query = Filepegawai::find();

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
            'file_id' => $this->file_id,
            'ukuran' => $this->ukuran,
            'tgl_upload' => $this->tgl_upload,
            'tgl_proses' => $this->tgl_proses,
        ]);

        $query->andFilterWhere(['like', 'namafile', $this->namafile]);

        return $dataProvider;
    }
}
