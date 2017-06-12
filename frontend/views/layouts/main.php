<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Boceto Boricua V3',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    $menuItems[] = '<form class="navbar-form navbar-left">' 
                 .'<div class="dropdown">'

                 .'<div class="form-group">'
                 .'<input type="text" class="form-control" placeholder="Search">'
                 .'</div>'
                 .'<button type="submit" class="btn btn-default">'
                 .'<span class="glyphicon glyphicon-search"></span></button>'
                 
                 .'<button class="btn btn-default" dropdown-toggle" type="button" data-toggle="dropdown">Categories'
                 .'<span class="caret"></span></button>'
                 .'<ul class="dropdown-menu">'
                    .'<li><a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/art/acrylic">Acrylic</a></li>'
                    .'<li><a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/art/oil">Oil</a></li>'
                    .'<li><a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/art/ink">Ink</a></li>'
                    .'<li><a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/art/digital">Digital Painting</a></li>'
                 .'</ul>'

                 .'<a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/site/shopping-kart" class="btn btn-primary" role="button">
                 <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>'

                 .'</div>'
                 .'</form>';
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';

        $menuItems[] = '<form class="navbar-form navbar-left">' 
                      .'<div class="dropdown">' 
                      
                        .'<button class="btn btn-default" dropdown-toggle" type="button" data-toggle="dropdown"> '
                        .'<span class="glyphicon glyphicon-cog"></span></button>'
                            .'<ul class="dropdown-menu">'
                                .'<li><a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/user/user-info-view">Manage account information</a></li>'
                                .'<li><a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/user/user-shipping-address-view">Change Shipping Address</a></li>'
                                .'<li><a href="http://localhost:8080/Boceto_Boricua_V3/frontend/web/index.php/user/user-billing-address-view">Change Billing Address</a></li>'
                                .'<li><a href="#">Change Password</a></li>'
                                .'<li><a href="#">View purchase history</a></li>'
                            .'</ul>'
                      . '</div>'
                      .'</form>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="container-fluid text-center">
  <p>Hosted by #. Copyright © 2017 Boceto Boricua. All rights reserved.</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
