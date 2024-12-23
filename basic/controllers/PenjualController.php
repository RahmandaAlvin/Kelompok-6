<?php

namespace app\controllers;

use app\models\Penjual;
use app\models\PenjualSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenjualController implements the CRUD actions for Penjual model.
 */
class PenjualController extends Controller
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
     * Lists all Penjual models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenjualSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penjual model.
     * @param int $Id_Penjual Id Penjual
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Penjual)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Penjual),
        ]);
    }

    /**
     * Creates a new Penjual model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Penjual();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Penjual' => $model->Id_Penjual]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Penjual model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Penjual Id Penjual
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Penjual)
    {
        $model = $this->findModel($Id_Penjual);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Penjual' => $model->Id_Penjual]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Penjual model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Penjual Id Penjual
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Penjual)
    {
        $this->findModel($Id_Penjual)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penjual model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Penjual Id Penjual
     * @return Penjual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Penjual)
    {
        if (($model = Penjual::findOne(['Id_Penjual' => $Id_Penjual])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
