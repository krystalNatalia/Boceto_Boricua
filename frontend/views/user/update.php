<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admintable */

$this->title = 'Update : ' . $model->Username;
$this->params['breadcrumbs'][] = ['label' => 'User Information', 'url' => ['user-info-view']];
//$this->params['breadcrumbs'][] = ['label' => $model->Username, 'url' => ['userInfoView', 'Username' => $model->Username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usertable-update">

<div class="background_color">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
</br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>