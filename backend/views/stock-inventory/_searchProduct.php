<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">
    <div class="background_color"> 

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'ProductID') ?>

    <?php echo $form->field($model, 'Title') ?>

    <?php echo $form->field($model, 'Description') ?>

    <?php echo $form->field($model, 'Dimensions') ?>

    <?php echo $form->field($model, 'Image') ?>

    <?php echo $form->field($model, 'Category') ?>

    <?php echo $form->field($model, 'Price') ?>

    <?php echo $form->field($model, 'Stock') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        <?= Html::a('Add new product', ['add-product'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>