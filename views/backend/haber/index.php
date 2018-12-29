<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HaberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Habers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="haber-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Haber'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HaberID',
            'Baslik',
            'Ozet:ntext',
            'Detay:ntext',
            'Resim:ntext',
            //'EklenmeTarihi',
            //'GuncellenmeTarihi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
