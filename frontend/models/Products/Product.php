<?php

namespace frontend\models\Products;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $ProductID
 * @property string $Title
 * @property string $Description
 * @property string $Dimensions
 * @property string $Image
 * @property string $Category
 * @property integer $Price
 * @property integer $Stock
 *
 * @property Hasproducts[] $hasproducts
 * @property Ordertable[] $orderNumbers
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
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
            [['ProductID', 'Title'], 'required'],
            [['Price', 'Stock'], 'integer'],
            [['ProductID'], 'string', 'max' => 10],
            [['Title'], 'string', 'max' => 40],
            [['Description'], 'string', 'max' => 200],
            [['Dimensions'], 'string', 'max' => 30],
            [['Image'], 'string', 'max' => 1024],
            [['Category'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductID' => 'Product ID',
            'Title' => 'Title',
            'Description' => 'Description',
            'Dimensions' => 'Dimensions',
            'Image' => 'Image',
            'Category' => 'Category',
            'Price' => 'Price',
            'Stock' => 'Stock',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasproducts()
    {
        return $this->hasMany(Hasproducts::className(), ['ProductID' => 'ProductID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderNumbers()
    {
        return $this->hasMany(Ordertable::className(), ['OrderNumber' => 'OrderNumber'])->viaTable('hasproducts', ['ProductID' => 'ProductID']);
    }
}
