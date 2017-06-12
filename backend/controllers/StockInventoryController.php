<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use backend\models\NewProductForm;
use yii\web\UploadedFile;
use backend\model\Product;
use backend\models\ProductSearch;

/**
 * Site controller
 */
class StockInventoryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','update','delete','index'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAddProduct()
    {

        $model = new NewProductForm();

        if ($model->load(Yii::$app->request->post())) // se verifica que se este enviando un POST request al sistema
        {
            $model->ProductID = $this->GenerateProductId(); // se genera una identificacion unica para el producto (xxx-xxx-xx)

            $model->newPaintingImage = UploadedFile::getInstance($model, 'newPaintingImage'); // despues de subir un producto a la pagina,
                                                                                             //busca la instancia del archivo/imagen subido por el
                                                                                             //administrador
            if ($model->newPaintingImage) // verifica si hay una imagen guardada para ser procesada
            {
                $model->Image = Yii::getAlias( '@uploadPainting/' . $model->Category . '/' .
                $model->newPaintingImage->baseName . '.' . $model->newPaintingImage->extension); /// guarda la direccion en donde se encuentra la imagen digital
                                                                                                // del producto

                if ($dataSavedSuccessfully = $model->storeProductData()) // verifica si se pudo guardar la informacion sobre el producto
                { 

                    $model->newPaintingImage->saveAs(Yii::getAlias( '@uploadPainting/' . $model->Category . '/' .
                    $model->newPaintingImage->baseName . '.' . $model->newPaintingImage->extension)); //guarda la imagen en el folder correspondiente   
                }

                return $this->redirect(['stock-inventory/index']); 
            }
            

        }
        return $this->render('addProduct', ['model' => $model]);
        
    }

    public function GenerateProductId()
    {
        //Para generar el productID de la imagen que se subira en el back-end en el formulario al oprimir el botos "add products"
      //  $randomProductID = '*';  (orig)
      $str_randomProductID = ""; //se debe generar un array para guardar los numeros aleatorios

      //genera numero random desde el 0 hasta el 9
      for($x = 0; $x < 3; $x++)
      {

            $randoNumber1 = rand(0,9);
            $randoNumber2 = rand(0,9);
            $randoNumber3 = rand(0,9);

          if($x == 2)
          {      
              //para la tercera vez del loop donde x=2, ya se tiene en la variable $str_randomProductID ###-### (# es numero), ahora se le add
              //dos numeros.   
              $str_randomProductID .= $randoNumber1 . $randoNumber2; 
          }else
          {
              //se concadena strings con '.' y se guarda tres numeros seguidos por "-" las primeras dos veces del loop
             $str_randomProductID .= $randoNumber1 . $randoNumber2 . $randoNumber3 . "-";
          }
     
      }

        return $str_randomProductID;  /// XXX-XXX-XX
    }
    ///end of function

    public function actionViewAllProducts()
    {
        
    }
    

}
// end of class