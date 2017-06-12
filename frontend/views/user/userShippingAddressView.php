<?php 

use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = 'User Shipping Information';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="background_color">

<h1> Shipping Address Information: ( User: <?= $user; ?> ) <?= Html::a('Update', ['update-shipping-address', 'Username' => $model->Username], ['class' => 'btn btn-default btn-lg']) ?> </h1>

</div>

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Username',
            'StreetName',
            'CityName',
            'StateName',
            'Zipcode',
        ],
    ]) ?>
 <br/>
<p>
</p>