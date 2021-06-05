<?php

namespace app\controllers;

use Yii;
use app\models\Pangkatgolongan;
use app\models\PangkatgolonganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PangkatgolonganController implements the CRUD actions for Pangkatgolongan model.
 */
class PangkatgolonganController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pangkatgolongan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PangkatgolonganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pangkatgolongan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $providerPegawai = new \yii\data\ArrayDataProvider([
            'allModels' => $model->pegawais,
        ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'providerPegawai' => $providerPegawai,
        ]);
    }

    /**
     * Creates a new Pangkatgolongan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pangkatgolongan();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->pangkatgolongan_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pangkatgolongan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->pangkatgolongan_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pangkatgolongan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }

    
    /**
     * Finds the Pangkatgolongan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pangkatgolongan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pangkatgolongan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for Pegawai
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddPegawai()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Pegawai');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formPegawai', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
