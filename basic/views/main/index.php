<?php
/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
?>

 <?php
  echo Carousel::widget([
      'items' => [
          '<img src="https://unsplash.it/1140/600/?gravity=east&random"/>',
          '<img src="https://unsplash.it/g/1140/600/?random"/>',
          '<img src="https://unsplash.it/1140/600/?random"/>',
          '<img src="https://unsplash.it/1140/600/"/>',
        ],
      'options' => ['class' => 'carousel slide', 'data-interval' => '10000'],
      'controls' => [
          '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
          '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>',
        ]
     ]);
?>


<!--
<h1>main/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
-->
