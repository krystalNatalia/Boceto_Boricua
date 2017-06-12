<?php

namespace frontend\models\User;

use Yii;
use yii\base\Model;
use frontend\models\User\Usertable;

/**
 * AdmintableSearch represents the model behind the search form about `app\models\Admintable`.
 */
class UserInfoSearch extends Usertable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Username', 'FirstName', 'MiddleName', 'LastName', 'DateOfBirth', 'Town', 'PaymentMethod', 'Email', 'Password'], 'safe'],
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
    public function search($user)
    {
        $query = Usertable::find()->where(['Username' => $user ])->one();

        return $query;
    }
}