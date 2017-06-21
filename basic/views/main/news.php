<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\ListView;

$this->title = 'Лента новостей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-news">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    	echo ListView::widget([
    		'dataProvider' => $data,
    		'itemView' => '_news',
    	]);
    ?>

</div>
