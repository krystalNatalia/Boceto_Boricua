<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\models\User\Usertable;
use frontend\models\User\UserInfoForm;
use frontend\models\User\UserInfoSearch;

use frontend\models\User\Userbillingaddress;
use frontend\models\User\UserBillingAddressForm;
use frontend\models\User\UserBillingAddressSearch;


use frontend\models\User\Usershippingaddress;
use frontend\models\User\UserShippingAddressForm;
use frontend\models\User\UserShippingAddressSearch;



class UserController extends Controller
{



    ////////// General User Info related functions/actions
    public function actionUserInfoInput()
    {
        $model = new UserInfoForm();

        if ($model->load(Yii::$app->request->post())) 
        {
            if ($dataSavedSuccessfully = $model->generalInfoSave())
            {
                return $this->redirect(\Yii::$app->urlManager->createUrl("user/user-billing-address-input"));
            }
        }
        return $this->render('userInfoinput', ['model' => $model]);
    }

    public function actionUserInfoView()
    {
        $user = Yii::$app->user->identity->username;

        $searchModel = new UserInfoSearch();
        $model = $searchModel->search($user);

        return $this->render('userInfoView', [
            'model' => $model,
            'user' => $user,
        ]);
    }

    public function actionUpdate($Username)
    {
        $model = $this->findUserGeneralInfo($Username);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $user = Yii::$app->user->identity->username;

            return $this->render('userInfoView', [
            'model' => $model,
            'user' => $user,
        ]);

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    protected function findUserGeneralInfo($Username)
    {
        if (($model = Usertable::findOne($Username)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /////////////////////////////User Billing Adress related functions/actions//////////////////////////////////////

    public function actionUserBillingAddressInput()
    {
        $model = new UserBillingAddressForm();

        if ($model->load(Yii::$app->request->post())) 
        {
            if ($dataSavedSuccessfully = $model->SaveBillingAddress())
            {
                return $this->redirect(\Yii::$app->urlManager->createUrl("user/user-shipping-address-input"));
            }
        }
        return $this->render('userBillingAddressInput', ['model' => $model]);   
    }

    public function actionUserBillingAddressView()
    {
        $user = Yii::$app->user->identity->username;

        $searchModel = new UserBillingAddressSearch();
        $model = $searchModel->SearchBillingAddress($user);

        return $this->render('userBillingAddressView', [
            'model' => $model,
            'user' => $user,
        ]);
    
    }

    public function actionUpdateBillingAddress($Username)
    {
        $model = $this->findUserBillingAddressInfo($Username);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $user = Yii::$app->user->identity->username;

            return $this->render('userBillingAddressView', [
            'model' => $model,
            'user' => $user,
        ]);

        } else {
            return $this->render('userBillingAddressUpdate', [
                'model' => $model,
            ]);
        }
    }

    protected function findUserBillingAddressInfo($Username)
    {
        if (($model = Userbillingaddress::find()->where(['Username' => $Username ])->one() ) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /////////////////////////////////User Shipping Adress related functions/actions//////////////////////////////////

    public function actionUserShippingAddressInput()
    {
        $model = new UserShippingAddressForm();

        if ($model->load(Yii::$app->request->post())) 
        {
            if ($dataSavedSuccessfully = $model->SaveShippingAddress())
            {
                return $this->goHome();
            }
        }
        return $this->render('userShippingAddressInput', ['model' => $model]);   
    }

    public function actionUserShippingAddressView()
    {
        $user = Yii::$app->user->identity->username;

        $searchModel = new UserShippingAddressSearch();
        $model = $searchModel->SearchShippingAddress($user);

        return $this->render('userShippingAddressView', [
            'model' => $model,
            'user' => $user,
        ]);
    
    }

    public function actionUpdateShippingAddress($Username)
    {
        $model = $this->findUserShippingAddressInfo($Username);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $user = Yii::$app->user->identity->username;

            return $this->render('usershippingAddressView', [
            'model' => $model,
            'user' => $user,
        ]);

        } else {
            return $this->render('userShippingAddressUpdate', [
                'model' => $model,
            ]);
        }
    }

    protected function findUserShippingAddressInfo($Username)
    {
        if (($model = Usershippingaddress::find()->where(['Username' => $Username ])->one() ) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
}