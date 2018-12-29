<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Haber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="haber-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HaberID')->textInput() ?>

    <?= $form->field($model, 'Baslik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ozet')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Detay')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Resim')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'EklenmeTarihi')->textInput() ?>

    <?= $form->field($model, 'GuncellenmeTarihi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
