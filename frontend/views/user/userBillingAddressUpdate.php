<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admintable */

$this->title = 'Update : ' . $model->Username;
$this->params['breadcrumbs'][] = ['label' => 'User Information', 'url' => ['user-info-view']];
//$this->params['breadcrumbs'][] = ['label' => $model->Username, 'url' => ['userInfoView', 'Username' => $model->Username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userbillingaddress-update">

<div class="background_color">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
</br>

<div class="textWhite">
<div class="background_color">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StreetName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CityName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StateName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Zipcode')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancel', ['user-billing-address-view'], ['class' => 'btn btn-danger']) ?>
    </div>
</div>
    

    <?php ActiveForm::end(); ?>

</div>
</div>