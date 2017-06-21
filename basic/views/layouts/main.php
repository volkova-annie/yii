<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php     $this->beginBody() ?>
<div class="wrap">
<?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
//        ="http://localhost/yii/basic/main/index.php"/,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menu = [
              ['label' => 'Главная',          'url' => ['/main/index']],
              ['label' => 'О нас',            'url' => ['/main/about']],
              ['label' => 'Лента новостей',   'url' => ['/main/news']],
              ['label' => 'Контакты',         'url' => '#', 'linkOptions' => ['data-toggle' => 'modal','data-target' => '#contact']]
    ];
    if (Yii::$app->user->isGuest) {
  		$menu[] = ['label' => 'Войти', 'url' => ['/main/login']];
  	}
  	else {
  		$menu[] = ['label' => 'Личный кабинет', 'url' => ['/main/admin']];
  		$menu[] = ['label' => 'Выход', 'url' => ['/main/logout']];
  	}
      echo Nav::widget([
          'options' => ['class' => 'navbar-nav navbar-right'],
          'items' => $menu,
      ]);
      NavBar::end();
?>


<div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;  Annie's Company <?= date('Y') ?></p>

<!--        <p class="pull-right"><?= Yii::powered() ?></p>-->
    </div>
</footer>


<?php
    Modal::begin([
        'header' => '<h2>Контактная информация</h2>',
        'id' => 'contact',
    ]);

    // echo '<p>Телефон: +7 (812) 703-02-02</p><p>Fax:     +7 (812) 703-02-02</p><p>E-mail:  email@avalon.ru</p><p>Адрес:  Санкт-Петербург, Обручевых, 1</p> <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AMf7_9fasDCkhEZdIKF-neJajFHuu7_hN&amp;width=550&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>';
    echo '<table>
       <tr><td style="padding-right: 5px;">Телефон:</td><td style="padding: 5px;"> +7 (812) 703-02-02</td></tr>
       <tr><td style="padding-right: 5px;">Fax: </td><td style="padding: 5px;"> +7 (812) 703-02-02</td></tr>
       <tr><td style="padding-right: 5px;">E-mail: </td><td style="padding: 5px;"> email@avalon.ru</td></tr>
       <tr><td style="padding-right: 5px;">Адрес: </td><td style="padding: 5px;"> Санкт-Петербург, Обручевых, 1</td></tr>
    </table>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AMf7_9fasDCkhEZdIKF-neJajFHuu7_hN&amp;width=550&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>';

    Modal::end();
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
