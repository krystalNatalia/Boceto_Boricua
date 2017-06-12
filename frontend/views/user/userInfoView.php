<?php 

use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = 'User Information';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="background_color">

<h1> General information: ( User: <?= $user; ?> ) <?= Html::a('Update', ['update', 'Username' => $model->Username], ['class' => 'btn btn-default btn-lg']) ?> </h1>

</div>

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Username',
            'FirstName',
            'MiddleName',
            'LastName',
            'DateOfBirth',
            'Town',
            'PaymentMethod',
            'Email',
            'Password',
        ],
    ]) ?>
 <br/>
<p>
    
</p>
