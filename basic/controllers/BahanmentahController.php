<?php

namespace app\controllers;

use app\models\Bahanmentah;
use app\models\BahanmentahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BahanmentahController implements the CRUD actions for Bahanmentah model.
 */
class BahanmentahController extends Controller
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
     * Lists all Bahanmentah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BahanmentahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bahanmentah model.
     * @param int $Id_BahanMentah Id Bahan Mentah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_BahanMentah)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_BahanMentah),
        ]);
    }

    /**
     * Creates a new Bahanmentah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bahanmentah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_BahanMentah' => $model->Id_BahanMentah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bahanmentah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_BahanMentah Id Bahan Mentah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_BahanMentah)
    {
        $model = $this->findModel($Id_BahanMentah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_BahanMentah' => $model->Id_BahanMentah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bahanmentah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_BahanMentah Id Bahan Mentah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_BahanMentah)
    {
        $this->findModel($Id_BahanMentah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bahanmentah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_BahanMentah Id Bahan Mentah
     * @return Bahanmentah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_BahanMentah)
    {
        if (($model = Bahanmentah::findOne(['Id_BahanMentah' => $Id_BahanMentah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
