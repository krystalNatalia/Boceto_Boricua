<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * AdminSearch represents the model behind the search form about `app\models\Admin`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Price'], 'integer'],
            [['ProductID','Title', 'Description', 'Dimensions', 'Image', 'Category','Stock'], 'safe'],
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
        $query = Product::find();

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
            'Price' => $this->Price,
        ]);

        $query->andFilterWhere(['like', 'ProductID', $this->ProductID])
              ->andFilterWhere(['like', 'Title', $this->Title])
              ->andFilterWhere(['like', 'Description', $this->Description])
              ->andFilterWhere(['like', 'Dimensions', $this->Dimensions])
              ->andFilterWhere(['like', 'Image', $this->Image])
              ->andFilterWhere(['like', 'Category', $this->Category])
              ->andFilterWhere(['like', 'Stock', $this->Stock]);

        return $dataProvider;
    }
}