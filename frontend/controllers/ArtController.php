<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\Products\Product;
use frontend\models\Products\SearchProduct;


class ArtController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup','acrylic'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['acrylic'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionAcrylic()
    {
        $searchModel = new SearchProduct();
        $dataProvider = $searchModel->searchPaintings(Yii::$app->request->queryParams);

        return $this->render('acrylic', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]); 
    }

    public function actionOil()
    {
        $searchModel = new SearchProduct();
        $dataProvider = $searchModel->searchPaintings(Yii::$app->request->queryParams);

        return $this->render('oil', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]); 
    }

    public function actionInk()
    {
        $searchModel = new SearchProduct();
        $dataProvider = $searchModel->searchPaintings(Yii::$app->request->queryParams);

        return $this->render('ink', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]); 
    }

    public function actionDigital()
    {
        $searchModel = new SearchProduct();
        $dataProvider = $searchModel->searchPaintings(Yii::$app->request->queryParams);

        return $this->render('digital', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);  
    }


    /*public function actionIndex()
    {
        echo "Hello World";
    }*/

}