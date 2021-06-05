<?php

namespace app\controllers;

use Yii;
use app\models\Filepegawai;
use app\models\FilepegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FilepegawaiController implements the CRUD actions for Filepegawai model.
 */
class FilepegawaiController extends Controller
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
     * Lists all Filepegawai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FilepegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Filepegawai model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Filepegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $db = Yii::$app->db;
        $model = new Filepegawai();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            try {

                $namafile = UploadedFile::getInstance($model, 'namafile');
                $model->namafile = $namafile->name;
                $model->ukuran = $namafile->size;
                if ($model->save(false)) {
                    $filename = $model->getPrimaryKey();
                    // ambil id yg increment dari datadukung_id

                    $namafile->saveAs('filepegawai/' . $filename . '.xlsx');
                    // simpan file ke foler "datadukung/" dengan nama sesaui id incrementnya

                    $qry = "update filepegawai set tgl_upload=now() where file_id='$filename'";
                    $db->createCommand($qry)->execute();

                    Yii::$app->getSession()->setFlash('success', 'File telah diupload');
                    return $this->redirect(['index']);
                } else {
                    Yii::$app->getSession()->setFlash('error', 'File gagal diupload');
                    return $this->render('create', ['model' => $model]);
                }
            } catch (Exception $e) {
                Yii::$app->getSession()->setFlash('error', "{$e->getMessage()}");
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Filepegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->file_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Filepegawai model.
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
     * Finds the Filepegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Filepegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Filepegawai::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
