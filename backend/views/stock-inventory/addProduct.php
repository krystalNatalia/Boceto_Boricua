<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$this->title = 'New Product Entry';
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
        <?php //echo $form->field($model, 'ProductID')->textInput() ?>
        <?= $form->field($model, 'Title')->textInput() ?>
        <?= $form->field($model, 'Description')->textarea() ?>
        <?= $form->field($model, 'Dimensions')->textInput() ?>
        <?php //echo $form->field($model, 'Image')->textInput() ?>
       	<?= $form->field($model, 'Category')->dropDownList(['acrylic' => 'Acrylic', 'oil' => 'Oil', 'ink' => 'Ink', 'digital painting' => 'Digital Painting']); ?>
        <?= $form->field($model, 'Price')->textInput() ?>
        <?= $form->field($model, 'Stock')->textInput() ?>

        <?= $form->field($model, 'newPaintingImage')->fileInput() ?>

    </div>
</div>

<div class="form-group">
<?= Html::submitButton('Store product in site' , ['class' => 'btn btn-success']) ?>
</div>

</div>
<?php ActiveForm::end(); ?>