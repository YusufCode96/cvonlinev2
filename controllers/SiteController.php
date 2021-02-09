<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\TbLogin;
use app\models\TbAbout;
use app\models\TbSpecialis;
use app\models\TbSkill;
use app\models\TbProject;
use app\models\TbWork;
use app\models\TbTools;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($id=null)
    {
        $this->layout = '@app/views/layouts/website';
        if(!empty($id)){
            $whereValueslogin=$id;
          }else{
            $whereValueslogin=1;
          }
        $about = TbAbout::findOne($whereValueslogin);
        $spesialis = TbSpecialis::find()->where("about_id=".$whereValueslogin)->all();
        $skill = TbSkill::find()->where("about_id=".$whereValueslogin)->all();
       
        $project = TbProject::find()->where("about_id=".$whereValueslogin)->all();
        $perusahaan = TbWork::find()->where("about_id=".$whereValueslogin)->all();
        $tools = TbTools::find()->where("about_id=".$whereValueslogin)->all();
        return $this->render('index', [
            'about' => $about,
            'spesialis' => $spesialis,
            'skill' => $skill,
            'project' => $project,
            'perusahaan' =>$perusahaan,
            'tools' => $tools,
        ]);
    }


    public function actionIndexdetail($id)
    {
        $this->layout = '@app/views/layouts/website';
        if(!empty($id)){
            $whereValueslogin=$id;
          }else{
            $whereValueslogin=1;
          }
        $about = TbAbout::findOne($whereValueslogin);
        $project = TbProject::find()->where("about_id=".$whereValueslogin)->one();
        return $this->render('indexdetail', [
            'about' => $about,
            'project' => $project,

        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = '@app/views/layouts/login';
        if (!Yii::$app->user->isGuest) {
            
            return $this->redirect(['dashboard']);
        }

        $model = new TbLogin();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //return $this->goBack();
            return $this->redirect(['login']);
            // var_dump($model->login());
            // var_dump("load");die();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['login']);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

       /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionDashboard($id=null)
    {
        
        return $this->render('dashboard');
    }
}
