<?php

namespace app\controllers;

use app\models\About\About;
use app\models\Cats\Cats;
use app\models\Contacts\Contacts;
use app\models\Cost;
use app\models\Fond\Fond;
use app\models\Header;
use app\models\Headerex\Headerex;
use app\models\Headersl\Headersl;
use app\models\Headersl1\Headersl1;
use app\models\Judges\Judges;
use app\models\Organizers\Organizers;
use app\models\Products\Products;
use app\models\Programm\Programm;
use app\models\Scheme\Scheme;
use app\models\Slider\Slider;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use yii\web\NotFoundHttpException;
use app\models\UploadForm;
use yii\web\UploadedFile;


class SiteController extends Controller
{
    /**
     * @inheritdoc
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
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
    public function actionIndex()
    {
        $this->layout = 'main';
        $header_slider = Headersl::find()->one();
        $header_ex = Headerex::find()->one();
        $about = About::find()->one();
        $judges = Judges::find()->all();
        $fond = Fond::find()->all();
        $cost_fife = Cost::find()->where(['name' => 'FIFE'])->one();
        $cost_wcf = Cost::find()->where(['name' => 'WCF'])->one();
        $cost_cfa = Cost::find()->where(['name' => 'CFA'])->one();
        $scheme = Scheme::find()->one();
        $programm = Programm::find()->all();
        $reklama = Headersl1::find()->one();
        $cats = Cats::find()->all();
        $organizers = Organizers::find()->all();
        $slider = Slider::find()->one();
        $contacts = Contacts::find()->one();
        return $this->render('index', [
            'header_slider' => $header_slider,
            'header_ex' => $header_ex,
            'about' => $about,
            'judges' => $judges,
            'fond' => $fond,
            'cost_fife' => $cost_fife,
            'cost_wcf' => $cost_wcf,
            'cost_cfa' => $cost_cfa,
            'scheme' => $scheme,
            'programm' => $programm,
            'reklama' => $reklama,
            'cats' => $cats,
            'organizers' => $organizers,
            'slider' => $slider,
            'contacts' => $contacts
        ]);
    }


}
