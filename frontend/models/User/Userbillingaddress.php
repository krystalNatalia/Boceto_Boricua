<?php

namespace frontend\models\User;

use Yii;

/**
 * This is the model class for table "userbillingaddress".
 *
 * @property integer $IndexID
 * @property string $Username
 * @property string $StreetName
 * @property string $CityName
 * @property string $StateName
 * @property string $Zipcode
 *
 * @property Usertable $username
 */
class Userbillingaddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userbillingaddress';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Username'], 'required'],
            [['Username', 'StreetName'], 'string', 'max' => 30],
            [['CityName', 'StateName'], 'string', 'max' => 20],
            [['Zipcode'], 'string', 'max' => 5],
            [['Username'], 'exist', 'skipOnError' => true, 'targetClass' => Usertable::className(), 'targetAttribute' => ['Username' => 'Username']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IndexID' => 'Index ID',
            'Username' => 'Username',
            'StreetName' => 'Street Name',
            'CityName' => 'City Name',
            'StateName' => 'State Name',
            'Zipcode' => 'Zipcode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsername()
    {
        return $this->hasOne(Usertable::className(), ['Username' => 'Username']);
    }
}
