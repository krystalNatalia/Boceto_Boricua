<?php

namespace frontend\models\Products;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Products\Product;

/**
 * AdmintableSearch represents the model behind the search form about `app\models\Admintable`.
 */
class SearchProduct extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductID', 'Title', 'Description', 'Dimensions', 'Image', 'Category', 'Price', 'Stock'], 'safe'],
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
    public function searchPaintings($params)
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
      //para hacer la busqueda entera de la tabla producto
        $query->andFilterWhere(['like', 'ProductID', $this->ProductID])
            ->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'inicial', $this->Description])
            ->andFilterWhere(['like', 'apellidos', $this->Dimensions])
            ->andFilterWhere(['like', 'Image', $this->Image])
            ->andFilterWhere(['like', 'Category', $this->Category])
            ->andFilterWhere(['like', 'Price', $this->Price])
            ->andFilterWhere(['like', 'Stock', $this->Stock]);

        return $dataProvider;
    }

    public function GetProductInstance($ProductID){
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand(
            "SELECT * FROM product WHERE ProductID = " . $ProductID 
        );

        return  $command->queryAll();
    }


}