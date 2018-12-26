<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Testgii;

/**
 * TestgiiSearch represents the model behind the search form of `frontend\models\Testgii`.
 */
class TestgiiSearch extends Testgii
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ngay_sinh', 'thang_sinh', 'nam_sinh', 'ho_ten'], 'integer'],
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
        $query = Testgii::find();

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
            'id' => $this->id,
            'ngay_sinh' => $this->ngay_sinh,
            'thang_sinh' => $this->thang_sinh,
            'nam_sinh' => $this->nam_sinh,
            'ho_ten' => $this->ho_ten,
        ]);

        return $dataProvider;
    }
}
