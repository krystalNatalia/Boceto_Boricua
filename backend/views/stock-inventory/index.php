<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'Stock Inventory';
?>
<div class="site-index">
    

    <div class="container-fluid text-center">   

        <div class="row content">
            

          <div class="col-sm-15 text-left"> 
            <div class="background_color">
              <h1>Stock Inventory</h1>
              <p>Welcome to the stock inventory, here you will able see the entire inventory of ware that our site 
              currently sells. If you are a registered admin you can insert new shop item or look at the current inventory.</p>
            </div>
          </div>
    
  </div>

  </br>

        <div class="product-index">

            <?php echo $this->render('_searchProduct', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'ProductID',
                    'Title',
                    //'Description',
                    'Dimensions',
                    //'Image',
                    'Category',
                    'Price',
                    'Stock',

                    ['class' => 'yii\grid\ActionColumn'],
                    //['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],

                ],
            ]); ?>
      </div>
    
    </br>
    
  </div>

</div>