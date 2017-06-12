<?php

namespace frontend\models\User;

use Yii;
use yii\base\Model;
use frontend\models\User\Usershippingadress;

/**
 * AdmintableSearch represents the model behind the search form about `app\models\Admintable`.
 */
class UserShippingAddressSearch extends Userbillingaddress
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IndexID','Username', 'StreetName', 'CityName', 'StateName', 'Zipcode'], 'safe'],
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
    public function SearchShippingAddress($user)
    {
        $query = Usershippingaddress::find()->where(['Username' => $user ])->one();

        return $query;
    }
}