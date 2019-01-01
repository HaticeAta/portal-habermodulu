<?php
namespace kouosl\habermodulu\controllers\frontend;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


use kouosl\habermodulu\models\Haber;
use kouosl\habermodulu\models\HaberSearch;



/**
 * Default controller for the `habermodulu` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{ 
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {	$model = new Haber();
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Son Dakika"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	
	protected function findModel($id)
    {
        if (($model = Haber::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
	public function actionHaberoku($id){
	
	//	return $this->render('haberoku');
		return $this->render('haberoku', [
            'model' => $this->findModel($id),
        ]);
	}
		
	public function actionSondakika()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Son Dakika"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	public function actionEkonomi()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$dataProvider->query->Where('Haber.Kategori="Ekonomi"');
	
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);	
	}
	public function actionPolitika()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Politika"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	public function actionEgitim()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Egitim"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	public function actionTeknoloji()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Teknoloji"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	public function actionSaglik()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Sağlık"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	public function actionMagazin()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Magazin"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	public function actionSpor()
    {
		$searchModel = new HaberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);	
		$dataProvider->query->Where('Haber.Kategori="Spor"');
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
}
