<?php

namespace frontend\models\User;

use Yii;
use yii\base\Model;
use frontend\models\User\Usertable;

class UserInfoForm extends Model
{
    public $Username;
    public $FirstName;
    public $MiddleName;
    public $LastName;
    public $DateOfBirth;
    public $Town;
    public $PaymentMethod;
    public $Email;
    public $Password;

    /**
    * @return array the validation rules.
    */
    public function rules()
    {
        return [
            [['Username'], 'required'],
            [['DateOfBirth'], 'date', 'format' => 'php:Y-m-d'],
            [['Username'], 'string', 'max' => 30],
            [['FirstName', 'MiddleName', 'LastName', 'Town', 'PaymentMethod'], 'string', 'max' => 20],
            [['Email', 'Password'], 'string', 'max' => 40],
        ];
    }

    public function generalInfoSave()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $generalInfo = new Usertable();
        $generalInfo->Username = $this->Username;
        $generalInfo->FirstName = $this->FirstName;
        $generalInfo->MiddleName = $this->MiddleName;
        $generalInfo->LastName = $this->LastName;
        $generalInfo->DateOfBirth = $this->DateOfBirth;
        $generalInfo->Town = $this->Town;
        $generalInfo->PaymentMethod = $this->PaymentMethod;
        $generalInfo->Email = $this->Email;
        $generalInfo->Password = $this->Password;
        
        return $generalInfo->save() ? $generalInfo : null;
    }

}