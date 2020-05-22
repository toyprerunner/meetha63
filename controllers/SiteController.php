<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\SqlDataProvider;
use app\models\HaDocuments;
use app\models\HadocumentsSearch;
use app\models\Group;
use app\models\GroupSearch;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' =>[
              'class' => AccessControl::className(),
              'only' => ['index','view', 'create', 'update', 'delete'],
              'rules' => [
                [
                  'actions' => ['index','create', 'update','delete'],
                  'allow' => true,
                  'roles' => ['@']
                ],
                [
                  'actions' => ['view'],
                  'allow' => true,
                  'roles' => ['?', '@']
                ]
              ]
            ]
        ];
    }
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' => ['index','logout'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

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

    public function actionIndex()
    {
        $searchModel = new GroupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 10;
        $dataProvider->sort->defaultOrder = ['id' => SORT_ASC];

        $ha = $searchModel->searchHa();
        $ha->pagination->pageSize = 10;
        $ha->sort->defaultOrder = ['id' => SORT_ASC];

        $had = $searchModel->searchHad();
        $had->pagination->pageSize = 10;
        $had->sort->defaultOrder = ['id' => SORT_ASC];

        $hadc = $searchModel->searchHadc();
        $hadc->pagination->pageSize = 10;
        $hadc->sort->defaultOrder = ['id' => SORT_ASC];


        $hadd = $searchModel->searchHadd();
        $hadd->pagination->pageSize = 10;
        $hadd->sort->defaultOrder = ['id' => SORT_ASC];

        $hade = $searchModel->searchHade();
        $hade->pagination->pageSize = 10;
        $hade->sort->defaultOrder = ['id' => SORT_ASC];

        $hadf = $searchModel->searchHadf();
        $hadf->pagination->pageSize = 10;
        $hadf->sort->defaultOrder = ['id' => SORT_ASC];

        $hadg = $searchModel->searchHadg();
        $hadg->pagination->pageSize = 10;
        $hadg->sort->defaultOrder = ['id' => SORT_ASC];

        $hadh = $searchModel->searchHadh();
        $hadh->pagination->pageSize = 10;
        $hadh->sort->defaultOrder = ['id' => SORT_ASC];

        $hadi = $searchModel->searchHadi();
        $hadi->pagination->pageSize = 10;
        $hadi->sort->defaultOrder = ['id' => SORT_ASC];


        $hadj = $searchModel->searchHadj();
        $hadj->pagination->pageSize = 10;
        $hadj->sort->defaultOrder = ['id' => SORT_ASC];


        $hadk = $searchModel->searchHadk();
        $hadk->pagination->pageSize = 10;
        $hadk->sort->defaultOrder = ['id' => SORT_ASC];

        //test send mail
        //$this->sendMail('ikkdev@gmail.com','Your Fullname');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'ha' => $ha,
            'had' => $had,
            'hadc' => $hadc,
            'hadd' => $hadd,
            'hade' => $hade,
            'hadf' => $hadf,
            'hadg' => $hadg,
            'hadh' => $hadh,
            'hadi' => $hadi,
            'hadj' => $hadj,
            'hadk' => $hadk,



        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function sendMail($email, $fullname)
    {
        Yii::$app->mailer
            ->compose('@app/mail/layouts/register', [
                'fullname' => $fullname
            ])
            ->setFrom(['chulatatnarin@gmail.com' => 'Namyuen Hospital'])
            ->setTo($email)
            ->setSubject('ยินดีต้อนรับสู่โรงพยาบาล')
            ->attach(Yii::getAlias('@webroot') . '/attach/' . 'brochure.pdf')
            //->attach(Yii::getAlias('@webroot').'/attach/'.'Poster.pdf')
            ->send();
    }
}
