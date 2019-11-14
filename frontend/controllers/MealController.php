<?php

namespace frontend\controllers;

use Yii;
use common\models\Meal;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MealController implements the CRUD actions for Meal model.
 */
class MealController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionSearch()
    {
        $arr1 = Yii::$app->request->post()['Meal'];
        $arr2 = Meal::find()->all();
        $arr5 = [];
        $arr6 = [];
        foreach ($arr2 as $key => $value) {
           $arr3 = $value->attributes;
           array_splice($arr3, 0, 2);
            $arr4 = array_intersect($arr3, $arr1);
            if (count($arr4)>0) {
                array_push($arr5, [count($arr4), $value->attributes['id']]);
            }
        }
        arsort($arr5);
        foreach ($arr5 as $key=>$val) {
            array_push($arr6, $val[1]);
        }

            $dataProvider = new ActiveDataProvider([
                'query' => Meal::find()->where(['id'=> $arr6]),
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
    }

    /**
     * Lists all Meal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Meal::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Meal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionChoose()
    {
        $model = new Meal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the Meal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Meal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Meal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
