<?php

namespace app\modules\admin\controllers;

use app\models\ImageManager;
use Yii;
use app\models\About\About;
use app\models\About\AboutSearch;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\MethodNotAllowedHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

Yii::setAlias('@images', dirname(dirname(dirname(__DIR__))) . '/web/img/');
/**
 * AboutController implements the CRUD actions for About model.
 */
class AboutController extends Controller
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
                    'delete' => ['POST'],
                    'delete-image' => ['POST'],
                    'sort-image' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all About models.
     * @return mixed
     */

    /**
     * Displays a single About model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new About model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Finds the About model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return About the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = About::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionSaveImg()
    {
        $this->enableCsrfValidation = false;
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            $dir_name = strtolower($post['ImageManager']['class']);
            $dir = Yii::getAlias('@images'). '/'. $dir_name. '/';
            if (!file_exists($dir)){
                FileHelper::createDirectory($dir);
            }
            $result_link = Yii::getAlias('@images').'/'.$dir_name.'/';
            $file = UploadedFile::getInstanceByName('ImageManager[attachment]');
            $model = new ImageManager();
            $model->name = strtolower(strtotime('now') . '_' . Yii::$app->getSecurity()->generateRandomString(6) . '.' .
                $file->extension);
            $model->load($post);
            $model->validate();

            if ($model->hasErrors()){
                $result = [
                    'error' => $model->getFirstError('file')
                ];
            }else {

                if ($file->saveAs($dir . $model->name)) {
                    $imag = Yii::$app->image->load($dir . $model->name);
                    $imag->save($dir . $model->name, 85);

                    $result = ['filelink' => $result_link . $model->name, 'filename' => $model->name];
                } else {
                    $result = [
                        'error' => 'Ошибка'
                    ];
                }
                $model->save();
            }
            Yii::$app->response->format = Response::FORMAT_JSON;

            return $result;
        } else {
            throw new BadRequestHttpException('Only POST is allowed');
        }
    }

    public function actionDeleteImage()
    {
        if(($model = ImageManager::findOne(Yii::$app->request->post('key')))){
            $dir_name = strtolower($model->class);
            unlink(Yii::getAlias('@images').'/'.$dir_name. '/'. $model->name);
            $model->delete();
            return true;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

    }
    public function actionSortImage($id)
    {
        if(Yii::$app->request->isAjax){
            $post = Yii::$app->request->post('sort');
            if($post['oldIndex'] > $post['newIndex']){
                $param = ['and',['>=','sort',$post['newIndex']],['<','sort',$post['oldIndex']]];
                $counter = 1;
            }else{
                $param = ['and',['<=','sort',$post['newIndex']],['>','sort',$post['oldIndex']]];
                $counter = -1;
            }
            ImageManager::updateAllCounters(['sort' => $counter], [
                'and',['class'=>'about','item_id'=>$id],$param
            ]);
            ImageManager::updateAll(['sort' => $post['newIndex']], [
                'id' => $post['stack'][$post['newIndex']]['key']
            ]);
            return true;
        }
        throw new MethodNotAllowedHttpException();
    }
}
