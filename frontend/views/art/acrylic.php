<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */

$this->title = 'Acrylic Page';
?>
<!-- Page Content -->
    <div class="container">

        <div class="row">
            
            <div class="col-md-3">
                <div style="border-radius: 15px; background-color: #0D51DA; color:white; padding: 10px 10px 10px 10px; ">
                <h1>Acrylic Section</h1>
                
                <br/>
                <div class="list-group">
                    <button type="button" class="btn btn-default">Order by most recent</button> 
                    <p> </p>
                    <button type="button" class="btn btn-default">From lowest to highest price</button>  
                    <p> </p>
                    <button type="button" class="btn btn-default">From hightest to lowest price</button>
                    <p> </p>
                </div>
            </div>

                
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <br/>

                <div class="row">

                <?php foreach($dataProvider->models as $model)
                        {
                            if($model->Category == "acrylic")
                            {
                ?>
                            
                    
                        <div class="thumbnail">
                            <!--<div class="portrait">-->
                            <img src="/PhpSites/Boceto_Boricua_V3/common/Images/<?=$model->Category . '/' . $model->Title . '.jpg'?>" class="img-rounded" >
                            <!--<div>-->
                            <div class="caption">
                                <h4>Name of the Painting: <a href="#"><?= $model->Title ?></a>
                                <h4>Description: <?= $model->Description ?></h4>
                                <h4>Price: $<?= $model->Price ?>.99
                                </h4>
                                <h4>Stock: <?= $model->Stock ?></h4>
                                <?= Html::submitButton('Put in Shopping Kart', ['class' => 'btn btn-primary']) ?>
                                <?= Html::submitButton('Buy now', ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                   
                    
                            
                <?php
                            }
                        } 
                ?>

                    

                    <!--<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>-->

                </div>

            </div> 

        </div>

    </div>
    <!-- /.container -->