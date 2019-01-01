<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

include 'haberturleri.php';

?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
      
			'Kategori',
            'Baslik',
            'Ozet:ntext',
            'Detay:ntext',
            'Resim:ntext',
            'EklenmeTarihi',
            'GuncellenmeTarihi',
        ],
    ]) ?>