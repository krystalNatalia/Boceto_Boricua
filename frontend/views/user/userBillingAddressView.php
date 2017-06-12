<?php 

use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = 'User Billing Information';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="background_color">

<h1> Billing Address Information: ( User: <?= $user; ?> ) <?= Html::a('Update', ['update-billing-address', 'Username' => $model->Username], ['class' => 'btn btn-default btn-lg']) ?> </h1>

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