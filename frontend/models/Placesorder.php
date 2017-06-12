<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "placesorder".
 *
 * @property integer $OrderNumber
 * @property string $Username
 * @property string $OrderStatus
 *
 * @property Usertable $username
 * @property Ordertable $orderNumber
 * @property Ordertable $orderNumber0
 */
class Placesorder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'placesorder';
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
            [['OrderNumber', 'Username'], 'required'],
            [['OrderNumber'], 'integer'],
            [['Username', 'OrderStatus'], 'string', 'max' => 30],
            [['Username'], 'exist', 'skipOnError' => true, 'targetClass' => Usertable::className(), 'targetAttribute' => ['Username' => 'Username']],
            [['OrderNumber'], 'exist', 'skipOnError' => true, 'targetClass' => Ordertable::className(), 'targetAttribute' => ['OrderNumber' => 'OrderNumber']],
            [['OrderNumber'], 'exist', 'skipOnError' => true, 'targetClass' => Ordertable::className(), 'targetAttribute' => ['OrderNumber' => 'OrderNumber']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrderNumber' => 'Order Number',
            'Username' => 'Username',
            'OrderStatus' => 'Order Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsername()
    {
        return $this->hasOne(Usertable::className(), ['Username' => 'Username']);
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
    public function getOrderNumber0()
    {
        return $this->hasOne(Ordertable::className(), ['OrderNumber' => 'OrderNumber']);
    }
}
