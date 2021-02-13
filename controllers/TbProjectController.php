<?php

namespace app\controllers;

use Yii;
use app\models\TbProject;
use app\models\TbProjectSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use yii\web\UploadedFile;

/**
 * TbProjectController implements the CRUD actions for TbProject model.
 */
class TbProjectController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulkdelete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TbProject models.
     * @return mixed
     */
    public function actionIndex()
    {    
        $searchModel = new TbProjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single TbProject model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "TbProject #".$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($id),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
        }else{
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new TbProject model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new TbProject();  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Create new TbProject",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post())){
                
                $model->image1 = UploadedFile::getInstance($model, 'image1');
                $model->image2 = UploadedFile::getInstance($model, 'image2');
                $model->image3 = UploadedFile::getInstance($model, 'image3');
                
                if ($model->image1) {     
                    $rnd = rand(0,9999);
                    $newname= $model->image1->baseName."_".$rnd.".".$model->image1->extension;
                    $model->image1->saveAs('themeweb/images/project/' . $newname);
                    $model->image1=$newname;
                    
                }
                if ($model->image2) {     
                    $rnd = rand(0,9999);
                    $newname= $model->image2->baseName."_".$rnd.".".$model->image2->extension;
                    $model->image2->saveAs('themeweb/images/project/' . $newname);
                    $model->image2=$newname;
                    
                }

                if ($model->image3) {     
                    $rnd = rand(0,9999);
                    $newname= $model->image3->baseName."_".$rnd.".".$model->image3->extension;
                    $model->image3->saveAs('themeweb/images/project/' . $newname);
                    $model->image3=$newname;
                    
                }

                if($model->validate()){
                    $model->save(); 
                }

                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Create new TbProject",
                    'content'=>'<span class="text-success">Create TbProject success</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new TbProject",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
       
    }

    /**
     * Updates an existing TbProject model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($id); 
        $image_old1=$model->image1; 
        $image_old2=$model->image2; 
        $image_old3=$model->image3;       

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Update TbProject #".$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];         
            }else if($model->load($request->post())){
                $model->image1 = UploadedFile::getInstance($model, 'image1');
                $model->image2 = UploadedFile::getInstance($model, 'image2');
                $model->image3 = UploadedFile::getInstance($model, 'image3');

                if ($model->image1) {     
                    if (file_exists('themeweb/images/project/' . $image_old1)) {
                        unlink('themeweb/images/project/'.$image_old1);
                    }    
                    $rnd = rand(0,9999);
                    $newname= $model->image1->baseName."_".$rnd.".".$model->image1->extension;
                    $model->image1->saveAs('themeweb/images/project/' . $newname);
                    $model->image1=$newname;
                    
                }else{
                    $model->image1=$image_old1;
                }

                if ($model->image2) { 
                    if (file_exists('themeweb/images/project/' . $image_old2)) {
                        unlink('themeweb/images/project/'.$image_old2);
                    }        
                    $rnd = rand(0,9999);
                    $newname= $model->image2->baseName."_".$rnd.".".$model->image2->extension;
                    $model->image2->saveAs('themeweb/images/project/' . $newname);
                    $model->image2=$newname;
                    
                }else{
                    $model->image2=$image_old2;
                }

                if ($model->image3) {
                    if (file_exists('themeweb/images/project/' . $image_old3)) {
                        unlink('themeweb/images/project/'.$image_old3);
                    }        
                    $rnd = rand(0,9999);
                    $newname= $model->image3->baseName."_".$rnd.".".$model->image3->extension;
                    $model->image3->saveAs('themeweb/images/project/' . $newname);
                    $model->image3=$newname;
                    
                }else{
                    $model->image3=$image_old3;
                }

                if($model->validate()){
                    $model->save(); 
                }

                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "TbProject #".$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
            }else{
                 return [
                    'title'=> "Update TbProject #".$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];        
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Delete an existing TbProject model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $request = Yii::$app->request;
        $model=$this->findModel($id);  
        if (file_exists('themeweb/images/project/' . $model->image1)) {
            unlink('themeweb/images/project/'.$model->image1);
        }
        if (file_exists('themeweb/images/project/' . $model->image2)) {
            unlink('themeweb/images/project/'.$model->image2);
        }
        if (file_exists('themeweb/images/project/' . $model->image3)) {
            unlink('themeweb/images/project/'.$model->image3);
        }
        $this->findModel($id)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

     /**
     * Delete multiple existing TbProject model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionBulkdelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            if (file_exists('themeweb/images/project/' . $model->image1)) {
                unlink('themeweb/images/project/'.$model->image1);
            }
            if (file_exists('themeweb/images/project/' . $model->image2)) {
                unlink('themeweb/images/project/'.$model->image2);
            }
            if (file_exists('themeweb/images/project/' . $model->image3)) {
                unlink('themeweb/images/project/'.$model->image3);
            }
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

    /**
     * Finds the TbProject model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TbProject the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbProject::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
