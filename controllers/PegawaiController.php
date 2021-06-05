<?php

namespace app\controllers;

use Yii;
use app\models\Pegawai;
use app\models\PegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\base\Security;
use app\models\Filepegawai;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * PegawaiController implements the CRUD actions for Pegawai model.
 */
class PegawaiController extends Controller
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
     * Lists all Pegawai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pegawai model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionViewpegawai()
    {
        $id = Yii::$app->user->identity->username;
        $model = $this->findModel($id);

        return $this->render('viewpegawai', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new Pegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionImport($id)
    {
        $db = Yii::$app->db;
        $model = new Pegawai();
        $filepegawai = Filepegawai::findOne($id);

        $model->scenario = Pegawai::SCENARIO_IMPORT;

        if ($filepegawai != null) {
            $file = \Yii::getAlias('@app/web/filepegawai/' . $id . '.xlsx');

            if ($file) {
                $readerType = IOFactory::identify($file);
                $objReader = IOFactory::createReader($readerType);
                $objPHPExcel = $objReader->load($file);
                $sheet  = $objPHPExcel->getSheet(0);
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();
                // $var  = PHPExcel_Style_NumberFormat::toFormattedString($file[1],  'YYYY-MM-DD');

                for ($row = 2; $row <= $highestRow; $row++) {
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                    $pegawai_id = $rowData[0][1];
                    $nik = $rowData[0][2];
                    $nip = $rowData[0][3];
                    $nama_pegawai = $rowData[0][4];
                    $jeniskelamin_id = $rowData[0][5];
                    $tempat_lahir = $rowData[0][6];
                    $tgl_lahir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rowData[0][7])->format('Y-m-d');
                    $alamat = $rowData[0][8];
                    $status_kawin = $rowData[0][9];
                    $nama_pasangan = $rowData[0][10];
                    $sekolah_id = $rowData[0][11];
                    $tmt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rowData[0][12])->format('Y-m-d');
                    $statuspegawai_id = $rowData[0][13];
                    $pangkatgolongan_id = $rowData[0][14];
                    $pendidikanpegawai_id = $rowData[0][15];
                    $jurusan = $rowData[0][16];
                    $nama_sekolah = $rowData[0][17];
                    $sertifikasi = $rowData[0][18];
                    $status_inpasing = $rowData[0][19];
                    $jenispegawai_id = $rowData[0][20];
                    $tugas_tambahan = $rowData[0][21];
                    $kaderisasi_nu = $rowData[0][22];

                    $filepegawai = \Yii::$app->db->createCommand("select count(*) as jml from pegawai where pegawai_id=:pegawai_id", [
                        ':pegawai_id' => $pegawai_id,
                    ])->queryScalar();

                    if ($filepegawai == 0) { // jika belum ada datanya
                        $insert = \Yii::$app->db->createCommand("INSERT INTO pegawai "
                            . "(pegawai_id, nik, nip, nama_pegawai, jeniskelamin_id, tempat_lahir, tgl_lahir, alamat, status_kawin, nama_pasangan, sekolah_id, tmt, statuspegawai_id, pangkatgolongan_id, pendidikanpegawai_id, jurusan, nama_sekolah, sertifikasi, status_inpasing, jenispegawai_id, tugas_tambahan, kaderisasi_nu) "
                            . "VALUES(:pegawai_id, :nik, :nip, :nama_pegawai, :jeniskelamin_id, :tempat_lahir, :tgl_lahir, :alamat, :status_kawin, :nama_pasangan, :sekolah_id, :tmt, :statuspegawai_id, :pangkatgolongan_id, :pendidikanpegawai_id, :jurusan, :nama_sekolah, :sertifikasi, :status_inpasing, :jenispegawai_id, :tugas_tambahan, :kaderisasi_nu)", [
                            ':pegawai_id' => $pegawai_id,
                            ':nik' => $nik,
                            ':nip' => $nip,
                            ':nama_pegawai' => $nama_pegawai,
                            ':jeniskelamin_id' => $jeniskelamin_id,
                            ':tempat_lahir' => $tempat_lahir,
                            ':tgl_lahir' => $tgl_lahir,
                            ':alamat' => $alamat,
                            ':status_kawin' => $status_kawin,
                            ':nama_pasangan' => $nama_pasangan,
                            ':sekolah_id' => $sekolah_id,
                            ':tmt' => $tmt,
                            ':statuspegawai_id' => $statuspegawai_id,
                            ':pangkatgolongan_id' => $pangkatgolongan_id,
                            ':pendidikanpegawai_id' => $pendidikanpegawai_id,
                            ':jurusan' => $jurusan,
                            ':nama_sekolah' => $nama_sekolah,
                            ':sertifikasi' => $sertifikasi,
                            ':status_inpasing' => $status_inpasing,
                            ':jenispegawai_id' => $jenispegawai_id,
                            ':tugas_tambahan' => $tugas_tambahan,
                            ':kaderisasi_nu' => $kaderisasi_nu,
                            
                        ])->execute();
                    } else {
                        $update = \Yii::$app->db->createCommand("UPDATE pegawai SET nama_pegawai = :nama_pegawai WHERE pegawai_id=:id")
                            ->bindValue(':id', $pegawai_id)
                            ->bindValue(':nama_pegawai', $nama_pegawai)
                            ->execute();
                    }
                }
                $proses = "update filepegawai set tgl_proses=now() where file_id=$id";
                $db->createCommand($proses)->execute();

                Yii::$app->getSession()->setFlash('success', 'Data berhasil di Import');
                return $this->redirect(['index']);
            }
        }
    }

    public function actionCreate()
    {
        $model = new Pegawai();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            try {
                $foto = UploadedFile::getInstance($model, 'foto_pegawai');
                // ambil file yang diupload

                $model->foto_pegawai = $_POST['Pegawai']['pegawai_id'] . '.jpg';
                // save nama file ke field foto_siswa sesuai dengan siswa_id

                if ($model->save(false)) {
                    $foto->saveAs('fotopegawai/' . $model->pegawai_id . '.jpg');
                    // simpan file dengan nama sesuai dengan siswa_id

                    Yii::$app->getSession()->setFlash('success', 'Data saved');
                    return $this->redirect(['view', 'id' => $model->pegawai_id]);
                } else {
                    Yii::$app->getSession()->setFlash('error', 'Data not saved');
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
     * Updates an existing Pegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            $oldimg = $model->foto_pegawai;
            if ($oldimg != "") {
                unlink(Yii::$app->basePath . '/web/fotopegawai/' . $oldimg);
            }
            try {
                $gambar = UploadedFile::getInstance($model, 'foto_pegawai');
                $model->foto_pegawai = $_POST['Pegawai']['pegawai_id'] . '.jpg';
                if ($model->save()) {
                    $gambar->saveAs('fotopegawai/' . $model->pegawai_id . '.jpg');
                    Yii::$app->getSession()->setFlash('succes', 'Data berhasil diubah');
                    return $this->redirect(['view', 'id' => $model->pegawai_id]);
                } else {
                    Yii::$app->getSession()->setFlash('error', 'Data gagal diubah');
                    return $this->render('update', ['model' => $model,]);
                }
            } catch (Exception $e) {
                Yii::$app->getSession()->setFlash('error', "{$e->getMessage()}");
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }


    /**
     * Finds the Pegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Pegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pegawai::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Cuti
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddCuti()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Cuti');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formCuti', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Izin
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddIzin()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Izin');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formIzin', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Presensi
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddPresensi()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Presensi');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formPresensi', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
