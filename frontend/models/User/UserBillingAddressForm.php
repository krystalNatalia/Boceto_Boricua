<?php

namespace frontend\models\User;

use Yii;
use yii\base\Model;
use frontend\models\User\Userbillingaddress;

class UserBillingAddressForm extends Model
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
            [['CityName', 'StateName'], 'string', 'max' => 20],
            [['Zipcode'], 'string', 'max' => 5],
        ];
    }

    public function SaveBillingAddress()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $BillingAdressInfo = new Userbillingaddress();
        $BillingAdressInfo->Username = $this->Username;
        $BillingAdressInfo->StreetName = $this->StreetName;
        $BillingAdressInfo->CityName = $this->CityName;
        $BillingAdressInfo->StateName = $this->StateName;
        $BillingAdressInfo->Zipcode = $this->Zipcode;
        
        
        return $BillingAdressInfo->save() ? $BillingAdressInfo : null;
    }

}