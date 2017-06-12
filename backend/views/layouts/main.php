<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
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
        'brandLabel' => 'Boceto Boricua Admin Site',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Sign Up', 'url' => ['/site/signup']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Registered Admins', 'url' => ['/admin/index']];
        $menuItems[] = ['label' => 'Registered Users', 'url' => ['#']];
        $menuItems[] = ['label' => 'Inventory Stock', 'url' => ['/stock-inventory/index']];
        $menuItems[] = ['label' => 'Financial Reports', 'url' => ['#']];
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
                                .'<li><a href="#">Change account information</a></li>'
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
        <?php echo Alert::widget() //Prints password to the login site ?>
        <?= $content ?>
    </div>
</div>

<footer class="container-fluid text-center">
  <p>Hosted by GitHub. Copyright © 2017 Boceto Boricua. All rights reserved.</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
