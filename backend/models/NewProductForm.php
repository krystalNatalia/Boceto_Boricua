<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\Product;

class NewProductForm extends Model
{
    public $ProductID;
    public $Title;
    public $Description;
    public $Dimensions;
    public $Image;
    public $Category;
    public $Price;
    public $Stock;

    public $newPaintingImage;

    public function attributeLabels()
    {
        return [
            'ProductID' => 'Product ID',
            'Title' => 'Title',
            'Description' => 'Description',
            'Dimensions' => 'Dimensions',
            'Image' => 'Image',
            'Category' => 'Category',
            'Price' => 'Price (Dollar)',
            'Stock' => 'Stock (For Sale)',

            'newPaintingImage' => 'Painting Image',
        ];
    }
    /**
    * @return array the validation rules.
    */
    public function rules()
    {
        return [
            ['ProductID', 'string', 'max' => 10],
            ['Title', 'string', 'max' => 40],
            ['Description', 'string', 'max' => 200],
            ['Dimensions', 'string', 'max' => 30],
            ['Image', 'string', 'max' => 1024],
            ['Category', 'string', 'max' => 25 ],
            [['Price','Stock'], 'integer'],

            ['newPaintingImage', 'file', 'extensions' => 'png, jpg'],
            ['newPaintingImage', 'required']
        ];
    }

    public function storeProductData()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $newProduct = new Product();

        $newProduct->ProductID = $this->ProductID;
        $newProduct->Title = $this->Title;
        $newProduct->Description = $this->Description;
        $newProduct->Dimensions = $this->Dimensions;
        $newProduct->Image = $this->Image;
        $newProduct->Category = $this->Category;
        $newProduct->Price = $this->Price;
        $newProduct->Stock = $this->Stock;
        
        
        return $newProduct->save() ? $newProduct : null;
    }
}