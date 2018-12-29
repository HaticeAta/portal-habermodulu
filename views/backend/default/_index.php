<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
/*
$this->title = 'Admin';
//$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;

Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);

echo $this->render('index');
//echo $this->render('deneme');

Portlet::end();
*/ 

//$this->title = 'Admin';
echo $this->render('index');
