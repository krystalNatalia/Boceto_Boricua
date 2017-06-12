<?php

namespace frontend\models\User;

use Yii;
use yii\base\Model;
use frontend\models\User\Usershippingaddress;

class UserShippingAddressForm extends Model
{
    public $IndexID;
    public $Username;
    public $StreetName;
    public $CityName;
    public $StateName;
    public $Zipcode;

    /**
    * @return array the validation rules.
    */
    public function rules()
    {
        return [
            [['Username'], 'required'],
            [['Username', 'StreetName'], 'string', 'max' => 30],
            [['CityName', 'StateName'], 'string', 'max' => 40],
            [['Zipcode'], 'string', 'max' => 5],
        ];
    }

    public function SaveShippingAddress()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $ShippingAdressInfo = new Usershippingaddress();
        $ShippingAdressInfo->Username = $this->Username;
        $ShippingAdressInfo->StreetName = $this->StreetName;
        $ShippingAdressInfo->CityName = $this->CityName;
        $ShippingAdressInfo->StateName = $this->StateName;
        $ShippingAdressInfo->Zipcode = $this->Zipcode;
        
        
        return $ShippingAdressInfo->save() ? $ShippingAdressInfo : null;
    }

}