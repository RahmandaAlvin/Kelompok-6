<?php

namespace app\controllers;

use app\models\Produk;
use app\models\ProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdukController implements the CRUD actions for Produk model.
 */
class ProdukController extends Controller
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
     * Lists all Produk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProdukSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produk model.
     * @param int $Id_Produk Id Produk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Produk)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Produk),
        ]);
    }

    /**
     * Creates a new Produk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Produk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Produk' => $model->Id_Produk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Produk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Produk Id Produk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Produk)
    {
        $model = $this->findModel($Id_Produk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Produk' => $model->Id_Produk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Produk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Produk Id Produk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Produk)
    {
        $this->findModel($Id_Produk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Produk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Produk Id Produk
     * @return Produk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Produk)
    {
        if (($model = Produk::findOne(['Id_Produk' => $Id_Produk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
