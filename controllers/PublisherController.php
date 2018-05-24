<?php

namespace app\controllers;
use yii;
use app\models\Publisher;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule;

class PublisherController extends \yii\web\Controller
{


    public function actionCreate()
    {
        $model = new Publisher();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        Publisher::findOne($id)->delete();
        return $this->redirect(['/publisher/index']);
    }

    public function actionIndex()
    {
        $model = Publisher::find()->orderBy('id')->all();;

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
       
        $model = Publisher::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', compact('model'));
    }


    public function actionView($id)
    {
        $model = Publisher::findOne($id);
        return $this->render('view', compact('model'));
    }


}
