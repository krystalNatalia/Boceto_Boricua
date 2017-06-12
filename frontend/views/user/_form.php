<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usertable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usertable-form">
<div class="textWhite">
<div class="background_color">
    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'Username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FirstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MiddleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateOfBirth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Town')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PaymentMethod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?php //echo Html::a('Reset', ['update?Username=', 'model' => $model], ['class' => 'btn btn-warning']) ?>
        <?php echo Html::a('Cancel', ['user-info-view'], ['class' => 'btn btn-danger']) ?>
    </div>
</div>
    

    <?php ActiveForm::end(); ?>

</div>
</div>