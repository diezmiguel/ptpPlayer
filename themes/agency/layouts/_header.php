   <!-- Navigation -->
   <?php
   use yii\helpers\Html;
   use yii\bootstrap\Nav;
   use yii\bootstrap\NavBar;
   use yii\helpers\ArrayHelper;
    $class = !isset($class)?'':$class;
   if(Yii::$app->requestedAction->id == 'index'){
          $menus = [
              ['label' => 'Home', 'url' => '#home','linkOptions'=>['class'=>'page-scroll']],
              ['label' => 'About', 'url' =>'#about','linkOptions'=>['class'=>'page-scroll']],
              ['label' => 'Player Stats', 'url' =>['/site/playerstats']],
              ['label' => 'Tournaments', 'url' =>['/site/tournaments']],
              ['label' => 'Our Team', 'url' =>'#team','linkOptions'=>['class'=>'page-scroll']],
              ['label' => 'Contact', 'url' =>'#contact','linkOptions'=>['class'=>'page-scroll']],]
        ;
    }else {
       $menus = [
           ['label' => 'Home', 'url' => ['/site/index']],
           ['label' => 'About', 'url' =>['/site/about']],
           ['label' => 'Player Stats', 'url' =>['/site/playerstats']],
           ['label' => 'Tournaments', 'url' =>['/site/tournaments']],
           ['label' => 'Our Team', 'url' =>['/site/team']],
           ['label' => 'Contact', 'url' =>'#contact','linkOptions'=>['class'=>'page-scroll']],];
   }
   ?>

<?php
    $options = ['navbar','navbar-default','navbar-fixed-top'];
    NavBar::begin([
        'brandLabel' => 'PTP Stats',
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions'=>[
            'class'=>'navbar-header page-scroll'
        ],
        'options' => [
            'class' => 'navbar navbar-default navbar-fixed-top '.$class,
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' =>ArrayHelper::merge($menus,
           [
            /*Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],*/
        ]),
    ]);
    NavBar::end();
?>
