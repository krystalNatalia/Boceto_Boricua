<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ordertable".
 *
 * @property integer $OrderNumber
 * @property integer $Price
 * @property integer $SalesTax
 * @property string $OrderDate
 * @property string $OrderTime
 * @property integer $Quantity
 * @property integer $TrackingNumber
 * @property string $ShippingMethod
 *
 * @property Hasproducts[] $hasproducts
 * @property Product[] $products
 * @property Placesorder[] $placesorders
 * @property Placesorder[] $placesorders0
 * @property Usertable[] $usernames
 * @property Usertable[] $usernames0
 */
class Ordertable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordertable';
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
            [['OrderNumber'], 'required'],
            [['OrderNumber', 'Price', 'SalesTax', 'Quantity', 'TrackingNumber'], 'integer'],
            [['OrderDate', 'OrderTime'], 'safe'],
            [['ShippingMethod'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrderNumber' => 'Order Number',
            'Price' => 'Price',
            'SalesTax' => 'Sales Tax',
            'OrderDate' => 'Order Date',
            'OrderTime' => 'Order Time',
            'Quantity' => 'Quantity',
            'TrackingNumber' => 'Tracking Number',
            'ShippingMethod' => 'Shipping Method',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasproducts()
    {
        return $this->hasMany(Hasproducts::className(), ['OrderNumber' => 'OrderNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['ProductID' => 'ProductID'])->viaTable('hasproducts', ['OrderNumber' => 'OrderNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlacesorders()
    {
        return $this->hasMany(Placesorder::className(), ['OrderNumber' => 'OrderNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlacesorders0()
    {
        return $this->hasMany(Placesorder::className(), ['OrderNumber' => 'OrderNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsernames()
    {
        return $this->hasMany(Usertable::className(), ['Username' => 'Username'])->viaTable('placesorder', ['OrderNumber' => 'OrderNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsernames0()
    {
        return $this->hasMany(Usertable::className(), ['Username' => 'Username'])->viaTable('placesorder', ['OrderNumber' => 'OrderNumber']);
    }
}
