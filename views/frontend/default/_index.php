<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\grid\GridView;

//$this->title = 'Habermodulu';
//$data['title'] = Html::encode($this->title);
//$this->params['breadcrumbs'][] = $this->title;

//Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);
//echo $this->render('index');
//Portlet::end();

include 'haberturleri.php';

?>



 <?= GridView::widget([
        'dataProvider' => $dataProvider,
 
		'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
      
   	    'summary'=>'',
	    'showFooter'=>false,
		'showHeader' => false,
		
		'columns' => [
		   
            'Baslik',
            'Ozet', 
			
			['class' => 'yii\grid\ActionColumn',
			 'template' => '{view}',
			 
			 'buttons' => [
                    'view' => function ($url, $model) {
						
                        return  Html::a('Haberi Görüntüle', $url, 
						[ 'title' => Yii::t('app', 'View'), 'class'=>'btn btn-info', ]) ;
                    },
             ],

             'urlCreator' => function ($action, $model, $key, $index) {
                  if ($action === 'view') {
                      $url = \yii\helpers\Url::toRoute(['haberoku', 'id' => $key]);
                      return $url;
                  }
              }
			]
			
        ]
		
]); ?>
