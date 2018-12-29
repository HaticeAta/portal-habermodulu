<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Haber */

$this->title = Yii::t('app', 'Update Haber: {name}', [
    'name' => $model->HaberID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Habers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HaberID, 'url' => ['view', 'id' => $model->HaberID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="haber-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
