<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$this->title = 'General Info';
$this->params['breadcrumbs'][] = $this->title;

$user = Yii::$app->user->identity->username;

?>

<h1><?= Html::encode($this->title) ?></h1>

<br/>


<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="background_color">

<div class="row">
    <div class="col-lg-12">
        <h1>Please fill this form:</h1>
        <?= $form->field($model, 'Username')->textInput(['value' => $user]) ?>
        <?= $form->field($model, 'FirstName')->textInput() ?>
        <?= $form->field($model, 'MiddleName')->textInput() ?>
        <?= $form->field($model, 'LastName')->textInput() ?>
        <?= $form->field($model, 'DateOfBirth')->textInput()//->hint('Ex.Year-Month-Date => 1995-07-31') ?>
        <?= $form->field($model, 'Town')->textInput() ?>
        <?= $form->field($model, 'PaymentMethod')->textInput() ?>
        <?= $form->field($model, 'Email')->textInput() ?>
        <?= $form->field($model, 'Password')->textInput() ?>
    </div>
</div>

<div class="form-group">
<?= Html::submitButton('Create' , ['class' => 'btn btn-primary']) ?>
</div>

</div>
<?php ActiveForm::end(); ?>