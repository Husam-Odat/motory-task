<?php

namespace app\controllers;

use app\models\Service;
use app\models\ServiceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;

use yii\web\UploadedFile;
/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Service models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex1()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
 $products = Service::find()->joinWith('category')->all();

        return $this->render('index1', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
                        'products' => $products,

        ]);
    }
    public function actionIndex2()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
 $products = Service::find()->joinWith('category')->all();

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
                        'products' => $products,

        ]);
    }
    public function actionIndex_ar()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
 $products = Service::find()->joinWith('category')->all();

        return $this->render('index_ar', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
                        'products' => $products,

        ]);
    }

    /**
     * Displays a single Service model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
//     public function actionCreate()
//     {
//         $model = new Service();

//         if ($this->request->isPost) {
//             $model->load($this->request->post());

//             // Handle file upload
//             $iconName = $model->title;
//             $model->iconFile = UploadedFile::getInstance($model, 'iconFile');
            
//             $model->iconFile->saveAs('uploads/' . $iconName . '.' . $model->iconFile->extension);
//  $model->iconFile='uploads/' . $iconName . '.' . $model->iconFile->extension;

//             if ($model->upload() && $model->save()) {
//             // if ($model->load($this->request->post()) && $model->save()) {
//                 return $this->redirect(['view', 'id' => $model->id]);
//             }
//         } else {
//             $model->loadDefaultValues();
//         }

//         return $this->render('create', [
//             'model' => $model,
//         ]);
//     }
    public function actionCreate()
{
    $model = new Service();

    if ($this->request->isPost) {
        $model->load($this->request->post());

        // Handle file upload
        // $iconName = $model->title;
        $iconName = $model->title . '_' . date('Ymd_His');
// $created_at = date('Ymd_His');
        $model->icon = UploadedFile::getInstance($model, 'icon');
        
        $model->icon->saveAs('uploads/' . $iconName . '.' . $model->icon->extension);
         // Save icon name in the database
        $model->iconName  = $iconName.'.' . $model->icon->extension;

        $model->icon = 'uploads/' . $iconName . '.' . $model->icon->extension;

        if ($model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
    } else {
        $model->loadDefaultValues();
    }

    return $this->render('create', [
        'model' => $model,
    ]);
}


public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->icon = UploadedFile::getInstance($model, 'icon');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
