<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Haber */

$this->title = Yii::t('app', 'Create Haber');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Habers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="haber-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
