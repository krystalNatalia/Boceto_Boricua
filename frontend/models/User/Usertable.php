<?php

namespace frontend\models\User;

use Yii;

/**
 * This is the model class for table "usertable".
 *
 * @property string $Username
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $DateOfBirth
 * @property string $Town
 * @property string $PaymentMethod
 * @property string $Email
 * @property string $Password
 *
 * @property Placesorder[] $placesorders
 * @property Ordertable[] $orderNumbers
 * @property Ordertable[] $orderNumbers0
 * @property Userbillingaddress[] $userbillingaddresses
 * @property Usershippingaddress[] $usershippingaddresses
 */
class Usertable extends \yii\db\ActiveRecord
{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usertable';
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
            [['DateOfBirth'], 'safe'],
            [['Username'], 'string', 'max' => 30],
            [['FirstName', 'MiddleName', 'LastName', 'Town', 'PaymentMethod'], 'string', 'max' => 20],
            [['Email', 'Password'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Username' => 'Username',
            'FirstName' => 'First Name',
            'MiddleName' => 'Middle Name',
            'LastName' => 'Last Name',
            'DateOfBirth' => 'Date Of Birth',
            'Town' => 'Town',
            'PaymentMethod' => 'Payment Method',
            'Email' => 'Email',
            'Password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlacesorders()
    {
        return $this->hasMany(Placesorder::className(), ['Username' => 'Username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderNumbers()
    {
        return $this->hasMany(Ordertable::className(), ['OrderNumber' => 'OrderNumber'])->viaTable('placesorder', ['Username' => 'Username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderNumbers0()
    {
        return $this->hasMany(Ordertable::className(), ['OrderNumber' => 'OrderNumber'])->viaTable('placesorder', ['Username' => 'Username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserbillingaddresses()
    {
        return $this->hasMany(Userbillingaddress::className(), ['Username' => 'Username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsershippingaddresses()
    {
        return $this->hasMany(Usershippingaddress::className(), ['Username' => 'Username']);
    }
}
