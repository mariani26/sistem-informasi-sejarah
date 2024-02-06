<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kerjasama;

/**
 * KerjasamaSearch represents the model behind the search form of `backend\models\Kerjasama`.
 */
class KerjasamaSearch extends Kerjasama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kerjasama', 'mulai_kerjasama', 'akhir_kerjasama'], 'integer'],
            [['nm_instansi', 'nomor', 'manfaat', 'bidang'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Kerjasama::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_kerjasama' => $this->id_kerjasama,
            'mulai_kerjasama' => $this->mulai_kerjasama,
            'akhir_kerjasama' => $this->akhir_kerjasama,
        ]);

        $query->andFilterWhere(['like', 'nm_instansi', $this->nm_instansi])
            ->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'manfaat', $this->manfaat])
            ->andFilterWhere(['like', 'bidang', $this->bidang]);

        return $dataProvider;
    }
}
