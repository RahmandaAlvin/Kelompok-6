<?php

namespace app\controllers;

use app\models\Pengiriman;
use app\models\PengirimanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PengirimanController implements the CRUD actions for Pengiriman model.
 */
class PengirimanController extends Controller
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
     * Lists all Pengiriman models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PengirimanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengiriman model.
     * @param int $Id_Pengiriman Id Pengiriman
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Pengiriman)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Pengiriman),
        ]);
    }

    /**
     * Creates a new Pengiriman model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pengiriman();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Pengiriman' => $model->Id_Pengiriman]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pengiriman model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Pengiriman Id Pengiriman
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Pengiriman)
    {
        $model = $this->findModel($Id_Pengiriman);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Pengiriman' => $model->Id_Pengiriman]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pengiriman model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Pengiriman Id Pengiriman
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Pengiriman)
    {
        $this->findModel($Id_Pengiriman)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pengiriman model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Pengiriman Id Pengiriman
     * @return Pengiriman the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Pengiriman)
    {
        if (($model = Pengiriman::findOne(['Id_Pengiriman' => $Id_Pengiriman])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
