<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasproducts".
 *
 * @property string $ProductID
 * @property integer $OrderNumber
 * @property integer $Amount
 * @property integer $Price
 *
 * @property Ordertable $orderNumber
 * @property Product $product
 */
class Hasproducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hasproducts';
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
            [['ProductID', 'OrderNumber'], 'required'],
            [['OrderNumber', 'Amount', 'Price'], 'integer'],
            [['ProductID'], 'string', 'max' => 10],
            [['OrderNumber'], 'exist', 'skipOnError' => true, 'targetClass' => Ordertable::className(), 'targetAttribute' => ['OrderNumber' => 'OrderNumber']],
            [['ProductID'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['ProductID' => 'ProductID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductID' => 'Product ID',
            'OrderNumber' => 'Order Number',
            'Amount' => 'Amount',
            'Price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderNumber()
    {
        return $this->hasOne(Ordertable::className(), ['OrderNumber' => 'OrderNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['ProductID' => 'ProductID']);
    }
}
