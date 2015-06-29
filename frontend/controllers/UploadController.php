<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Upload;
use frontend\models\UploadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\db\Connection;
/**
 * UploadController implements the CRUD actions for Upload model.
 */
class UploadController extends Controller
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
     * Lists all Upload models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UploadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Upload model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Upload model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Upload();

        if ($model->load(Yii::$app->request->Post())) {
            
            //$fileName = $model->idFile;
            $file = UploadedFile::getInstance($model, 'fileName');
            $model->fileName = $file->name;
            $ext = end((explode(".", $file->name)));
            
            $model->fileName = Yii::$app->security->generateRandomString().".{$ext}";
            $path = Yii::$app->basePath.'../web/uploads/'.$model->fileName;
 
            if($model->save()){
                $file->saveAs($path);
               return $this->redirect(['view', 'id' => $model->idFile]);
            }
            
        }
        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    public function actionDone($id)
    {
        $model = new Upload();
        date_default_timezone_set("Asia/Jakarta");
        $model->dateend = date('d-M-Y h:i:s');
        Yii::$app->db->createCommand()->update('upload', ['dateend' => $model->dateend], 'idFile='.$id)->execute();
        Yii::$app->db->createCommand()->update('upload', ['status' => 3], 'idFile='.$id)->execute();
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionDownload($id, $fileName)
    {
       
        Yii::$app->db->createCommand()->update('upload', ['status' => 2], 'idFile='.$id)->execute();
        return $this->redirect('uploads/index.php?fileName='.$fileName);
    }

    /**
     * Updates an existing Upload model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idFile]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Upload model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Upload model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Upload the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Upload::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
