<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\Haber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="haber-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HaberID')->textInput() ?>
	
	<?= $form->field($model, 'Kategori')->listBox(
			array( 'Son Dakika' => 'Son Dakika',
			'Ekonomi'=>'Ekonomi',
			'Politika'=>'Politika',
			'Eğitim'=>'Eğitim',
			'Teknoloji'=>'Teknoloji',
			'Sağlık'=>'Sağlık',
			'Magazin'=>'Magazin',
			'Spor'=>'Spor')
			) ?>

    <?= $form->field($model, 'Baslik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ozet')->textInput()?>

    <?= $form->field($model, 'Detay')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'Resim')->textInput() ?>

    <?= $form->field($model, 'EklenmeTarihi')->widget(MaskedInput::className(), ['mask' => '9999/99/99']); ?>

    <?= $form->field($model, 'GuncellenmeTarihi')->widget(MaskedInput::className(), ['mask' => '9999/99/99']); ?>
	
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
