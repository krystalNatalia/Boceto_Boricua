<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$this->title = 'Billing Address Info';
$this->params['breadcrumbs'][] = $this->title;

$user = Yii::$app->user->identity->username;

?>
<div class="background_color">
<h1><?= Html::encode($this->title) ?></h1>
</div>
<br/>


<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="background_color">

<div class="row">
    <div class="col-lg-12">
        <h1>Please fill this form:</h1>
        <?= $form->field($model, 'Username')->textInput(['value' => $user]) ?>
        <?= $form->field($model, 'StreetName')->textInput() ?>
        <?= $form->field($model, 'CityName')->textInput() ?>
        <?= $form->field($model, 'StateName')->textInput() ?>
        <?= $form->field($model, 'Zipcode')->textInput() ?>
    </div>
</div>

<div class="form-group">
<?= Html::submitButton('Save ' , ['class' => 'btn btn-primary']) ?>
</div>

</div>
<?php ActiveForm::end(); ?>