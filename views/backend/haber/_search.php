<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HaberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="haber-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'HaberID') ?>
	
	<?= $form->field($model, 'Kategori') ?>

    <?= $form->field($model, 'Baslik') ?>

    <?= $form->field($model, 'Ozet') ?>

    <?= $form->field($model, 'Detay') ?>

    <?= $form->field($model, 'Resim') ?>

    <?php  echo $form->field($model, 'EklenmeTarihi') ?>

    <?php  echo $form->field($model, 'GuncellenmeTarihi') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
